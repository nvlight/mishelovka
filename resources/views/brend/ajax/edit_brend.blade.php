<script>

    function modalBrendEditSelectorInner(e, modalBrendEditSelector){
        e.preventDefault();
        let id = modalBrendEditSelector.dataset.brendId;
        //console.log('id: ' + id);

        if (id){
            getEditAjax(id);
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

    function getEditAjax(id)
    {
        let url = "/brend_get/"+id;
        const xhr = new XMLHttpRequest();

        xhr.open("get", url);

        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.addEventListener("readystatechange", () => {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let rs = JSON.parse(xhr.responseText);
                if (rs['success']) {

                    Swal.fire({
                        title: 'Редактирование бренда',
                        confirmButtonText: 'Обновить',
                        showCancelButton: true,
                        cancelButtonText: 'Отмена',
                        html:
                            '<label for="title" class="form-label">Бренд</label>' +
                            '<input type="text" class="form-control titleSwal mb-3" name="title" aria-describedby="titleHelp" '+
                             `value='${rs['brend']['title']}'>` +
                            '<div id="titleHelp" class="form-text"></div>',
                    });

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
            }
        });
        xhr.send();
    }

    //////////////////////
    editBrendHandler();

</script>