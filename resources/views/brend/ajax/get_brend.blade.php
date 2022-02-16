<script>

    function modalBrendShowSelectorInner(e, modalBrendShowSelector){
        e.preventDefault();
        let id = modalBrendShowSelector.dataset.brendId;
        //console.log('id: ' + id);

        if (id){
            getBrendAjax(id);
        }
    }

    function getBrendHandler(){
        let modalBrendShowSelector = document.querySelectorAll('.modal_brend_show');
        if (modalBrendShowSelector && modalBrendShowSelector.length){
            for(let i=0; i<modalBrendShowSelector.length; i++){
                modalBrendShowSelector[i].removeEventListener('submit', function(e){
                    modalBrendShowSelectorInner(e, modalBrendShowSelector[i]);
                });
                modalBrendShowSelector[i].addEventListener('submit', function(e){
                    modalBrendShowSelectorInner(e, modalBrendShowSelector[i]);
                });
            }
        }
    }

    function getBrendAjax(id)
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
                        title: 'Данные бренда',
                        html:
                            '<label for="title" class="form-label">Бренд</label>' +
                            '<input type="text" class="form-control titleSwal mb-3" name="title" aria-describedby="titleHelp" disabled=""'+
                             `value='${rs['brend']['title']}'>`,
                            //'<div id="titleHelp" class="form-text">введите название бренда, например JBS</div>',
                    })

                    let titleSwal = document.querySelector('.titleSwal');
                    if (titleSwal){
                        //let form = document.createElement('form');
                        let div = document.createElement('div');
                        div.innerHTML = rs['deleteButtonHtml'];
                        titleSwal.after(div);
                        deleteBrendHandler();
                    }
                }
            }
        });
        xhr.send();
    }

    //////////////////////
    getBrendHandler();

</script>