<script>

    function modalBrendUpSelectorInner(e, sel){
        e.preventDefault();
        let id = sel.dataset.brendId;
        //console.log('id: ' + id);

        if (id){
            upBrendAjax(id);
        }
    }

    function upBrendHandler(){
        let sel = document.querySelectorAll('.modal_brend_up');
        if (sel && sel.length){
            for(let i=0; i<sel.length; i++){
                sel[i].addEventListener('submit', function(e){
                    modalBrendUpSelectorInner(e, sel[i]);
                });
            }
        }
    }

    function upBrendAjax(id)
    {
        let url = "/brend_up/"+id;
        const xhr = new XMLHttpRequest();
        const params = "&_token=" + token + '&_method=patch';

        xhr.open("post", url);

        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.addEventListener("readystatechange", () => {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let rs = JSON.parse(xhr.responseText);
                if (rs['success']) {

                    if ( rs['needToRevert'] === undefined){
                        return;
                    }

                    // найти обе строки с данными, которые нужно реверснуть
                    let currentTr = document.querySelector(`#brendTable td[data-column-name='id'][data-column-value='${rs['currId']}' ]`).parentElement;
                    let prevTr = document.querySelector(`#brendTable td[data-column-name='id'][data-column-value='${rs['prevId']}' ]`).parentElement;
                    currentTr.setAttribute('for_delete', 1);
                    prevTr.setAttribute('for_delete', 1);

                    //let tmp = currentTr.innerHTML;
                    //currentTr.innerHTML = prevTr.innerHTML;
                    //prevTr.innerHTML = tmp;


                    // добавить новые 2 строки с новыми данными
                    let newCurrentTr = document.createElement('tr');
                    let newPrevTr = document.createElement('tr');
                    newCurrentTr.innerHTML = rs['trCurrentHtml'];
                    newPrevTr.innerHTML    = rs['trPrevHtml'];
                    currentTr.before(newCurrentTr);
                    currentTr.before(newPrevTr);

                    // удалить обе старые строки
                    currentTr.remove();
                    prevTr.remove();

                    // навесить обработчики на эти новые 2 строки.
                    // #show
                    let addedCurrentTrShowHandler = document.querySelector(`#brendTable td[data-column-value='${rs['currId']}'] ~ td form.modal_brend_show`);
                    let addedPrevTrShowHandler    = document.querySelector(`#brendTable td[data-column-value='${rs['prevId']}'] ~ td form.modal_brend_show`);
                    //conlog(addedCurrentTr);
                    //conlog(addedPrevTr);
                    addedCurrentTrShowHandler.addEventListener('submit', function(e){
                        modalBrendShowSelectorInner(e, addedCurrentTrShowHandler);
                    });
                    addedPrevTrShowHandler.addEventListener('submit', function(e){
                        modalBrendShowSelectorInner(e, addedPrevTrShowHandler);
                    });

                    // edit
                    let addedCurrentTrEditHandler = document.querySelector(`#brendTable td[data-column-value='${rs['currId']}'] ~ td form.modal_brend_edit`);
                    let addedPrevTrEditHandler    = document.querySelector(`#brendTable td[data-column-value='${rs['prevId']}'] ~ td form.modal_brend_edit`);
                    //conlog(addedCurrentTrEditHandler);
                    //conlog(addedPrevTrEditHandler);

                    addedCurrentTrEditHandler.addEventListener('submit', function(e){
                        modalBrendEditSelectorInner(e, addedCurrentTrEditHandler);
                    });
                    addedPrevTrEditHandler.addEventListener('submit', function(e){
                        modalBrendEditSelectorInner(e, addedPrevTrEditHandler);
                    });

                    // delete
                    deleteBrendHandler();

                }else{
                    conlog('up is fail!');
                }
            }
        });
        xhr.send(params);
    }

    //////////////////////
    upBrendHandler();

</script>