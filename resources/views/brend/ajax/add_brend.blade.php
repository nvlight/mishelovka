<script>
    //alert('thats right!')

    var token = "some token...";
    function findTokenFunction() {
        let findToken = document.head.querySelector('meta[name="csrf-token"]');
        if (findToken){
            if (findToken.hasAttribute('content')){
                token = findToken.getAttribute('content');
            }
        }
    }
    findTokenFunction();

    let brendAddSelector = document.querySelector('#brend_add_button');
    if (brendAddSelector){
        brendAddSelector.addEventListener('click', async function (e) {

            const { value: formValues } = await Swal.fire({
                title: 'Добавление нового бренда',
                html:
                    '<label for="title" class="form-label">Бренд</label>' +
                    '<input type="text" class="form-control" id="titleSwal" name="title" aria-describedby="titleHelp" value="">' +
                    '<div id="titleHelp" class="form-text">введите название бренда, например JBS</div>',

                    //'<input id="swal-input1" class="swal2-input" placeholder="type Title">',
                    // + '<input id="swal-input2" class="swal2-input">',
                focusConfirm: false,
                preConfirm: () => {
                    return [
                        document.getElementById('titleSwal').value,
                        //document.getElementById('swal-input2').value
                    ]
                }
            })

            if (formValues) {
                //console.log(formValues);
                brendStoreAjax(formValues[0]);
            }
        })
    }

    function brendStoreAjax(title)
    {
        let url = "/brend_create";
        const xhr = new XMLHttpRequest();
        const params = "&_token=" + token + '&title=' + title;

        xhr.open("post", url);

        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.addEventListener("readystatechange", () => {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let rs = JSON.parse(xhr.responseText);
                if (rs['success']) {

                    var brends_table_tr = document.querySelector('#brendTable tbody tr');
                    if (brends_table_tr) {
                        let tr = document.createElement('tr');
                        tr.innerHTML = rs['trHtml'];

                        brends_table_tr.before(tr);

                        // эта штука приводит к наслоению обработчиков
                        // getBrendHandler();
                        // ищем новое решение
                        let targetForm;
                        let id = rs['createdId'];
                        try{
                            // эта штука не работает как надо
                            // targetTr = modalBrendDeleteSelector[i].parentElement.parentElement;
                            // сделаем новую #brendTable tr form[data-brend-id=67]
                            targetForm = document.querySelector(`#brendTable tr form[data-brend-id='${id}']`);
                            targetForm.addEventListener('submit', function(e){
                                modalBrendShowSelectorInner(e, targetForm);
                            });
                            //console.log(targetTr);
                        }catch (e) {
                            console.log('error with getting && delete tr')
                        }

                        deleteBrendHandler();
                    }

                    Swal.fire(
                        'Создано!',
                        'Бренд с указанным описанием был создан.',
                        'success'
                    )
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
                        'Ошибка при создании бренда.<br>' + div.outerHTML,
                        'error'
                    )
                }
            }
        });
        xhr.send(params);
    }
</script>