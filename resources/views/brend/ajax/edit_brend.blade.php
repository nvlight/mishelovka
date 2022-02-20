<script>

    function modalBrendEditSelectorInner(e, modalBrendEditSelector){
        e.preventDefault();
        let id = modalBrendEditSelector.dataset.brendId;
        //console.log('id: ' + id);

        if (id){
            getBrendAjaxAgain(id);
        }
    }

    function editBrendHandler(){
        let modalBrendEditSelector = document.querySelectorAll('.modal_brend_edit');
        if (modalBrendEditSelector && modalBrendEditSelector.length){
            for(let i=0; i<modalBrendEditSelector.length; i++){
                //modalBrendEditSelector[i].removeEventListener('submit', function(e){
                //    modalBrendEditSelectorInner(e, modalBrendEditSelector[i]);
                //});
                modalBrendEditSelector[i].addEventListener('submit', function(e){
                    modalBrendEditSelectorInner(e, modalBrendEditSelector[i]);
                });
            }
        }
    }

    function getBrendAjaxAgain(id)
    {
        let url = "/brend_get/"+id;
        const xhr = new XMLHttpRequest();

        xhr.open("get", url);

        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.addEventListener("readystatechange", async () => {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let rs = JSON.parse(xhr.responseText);
                if (rs['success']) {

                    let isConfirmPressed = 0;
                    const { value: formValues } = await Swal.fire({
                        title: 'Редактирование бренда',
                        confirmButtonText: 'Обновить',
                        showCancelButton: true,
                        cancelButtonText: 'Отмена',
                        html:
                            '<label for="title" class="form-label">Бренд</label>' +
                            '<input type="text" class="form-control titleSwal mb-3" id="titleSwal" name="title" aria-describedby="titleHelp" '+
                             `value='${rs['brend']['title']}'>` +
                            '<div id="titleHelp" class="form-text"></div>',
                        preConfirm: () => {
                            //console.log(document.getElementById('titleSwal').value);
                            isConfirmPressed = 1;
                            return [
                                document.getElementById('titleSwal').value,
                            ]
                        },
                        isVisible: () => {
                            console.log('i am here!');
                            return 'cool';
                        },
                        didOpen: () => {
                            //conlog('didOpen working!');

                            // добавление кнопок на форму.
                            let titleSwal = document.querySelector('.titleSwal');
                            if (titleSwal){
                                // delete button
                                let div = document.createElement('div');
                                div.innerHTML = rs['deleteButtonHtml'];
                                titleSwal.after(div);

                                // show button
                                let div2 = document.createElement('div');
                                div2.innerHTML = rs['showButtonHtml'];
                                titleSwal.after(div2);
                                // now add handler for this showing...
                                // for edit modal form and --> show button
                                let targetForm1 = document.querySelector(`#swal2-html-container .modal_brend_show[data-brend-id='${id}']`);
                                //console.log(targetForm1);
                                targetForm1.addEventListener('submit', function(e){
                                    modalBrendShowSelectorInner(e, targetForm1);
                                });

                                deleteBrendHandler();
                            }
                        }
                    });
                    //console.log('title: '+formValues);
                    // теперь нужно обработать нажатие на кнопку Update
                    //console.log('title: '+document.getElementById('titleSwal').value);

                    // теперь валидация и сохранение, т.е. еще один ajax запрос
                    if (isConfirmPressed){
                        let title = document.getElementById('titleSwal').value;
                        editBrendAjax(id, title);
                    }
                }
            }
        });
        xhr.send();
    }

    function editBrendAjax(id, title)
    {
        let url = "/brend_update/"+id;
        const xhr = new XMLHttpRequest();
        const params = "&_token=" + token + '&title=' + title + '&_method=patch';

        xhr.open("post", url);

        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.addEventListener("readystatechange", () => {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let rs = JSON.parse(xhr.responseText);
                if (rs['success']) {

                    // теперь нужно добавить обновленную строку, удалить старую строку и навесить обработчики
                    // на вновь добавленную строку
                    let id = rs['updatedId'];
                    let tr = document.querySelector(`#brendTable tr form[data-brend-id='${id}']`).parentElement.parentElement;
                    let nextTr = tr.nextElementSibling;
                    tr.remove();
                    // add trHtml
                    let newTr = document.createElement('tr');
                    newTr.innerHTML = rs['trHtml'];
                    nextTr.before(newTr);

                    // нужно нависть обработчики на вновь созданную строку, на view/edit/delete
                    try{
                        // *** after add new brend tr --- add new Listeners;
                        // for show modal form and --> delete button
                        let targetForm1 = document.querySelector(`#brendTable tr form.modal_brend_show[data-brend-id='${id}']`);
                        targetForm1.addEventListener('submit', function(e){
                            modalBrendShowSelectorInner(e, targetForm1);
                        });
                        // for edit modal form and --> delete button
                        let targetForm2 = document.querySelector(`#brendTable tr form.modal_brend_edit[data-brend-id='${id}']`);
                        targetForm2.addEventListener('submit', function(e){
                            modalBrendEditSelectorInner(e, targetForm2);
                        });

                        deleteBrendHandler();
                        //console.log(targetTr);
                    }catch (e) {
                        console.log('error with getting && delete tr')
                    }

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Бренд был обновлен.',
                        showConfirmButton: false,
                        timer: 1500
                    });

                }else{
                    let error = rs['errors'];

                    let div = document.createElement('ul');
                    div.setAttribute('class', 'alert alert-danger');
                    let ul = document.createElement('ul');

                    for (let current in error){
                        let li = document.createElement('li');
                        li.innerHTML = error[current];
                        ul.appendChild(li);
                    }
                    div.appendChild(ul);

                    Swal.fire(
                        'Ошибка!',
                        'Ошибка при обновлении бренда.<br>' + div.outerHTML,
                        'error'
                    )
                }

            }
        });
        xhr.send(params);
    }

    //////////////////////
    editBrendHandler();

</script>