<script>

    function modalBrendDownSelectorInner(e, sel){
        e.preventDefault();
        let id = sel.dataset.brendId;
        //console.log('id: ' + id);

        if (id){
            downBrendAjax(id);
        }
    }

    function downBrendHandler(){
        let sel = document.querySelectorAll('.modal_brend_down');
        if (sel && sel.length){
            for(let i=0; i<sel.length; i++){
                sel[i].addEventListener('submit', function(e){
                    modalBrendDownSelectorInner(e, sel[i]);
                });
            }
        }
    }

    function downBrendAjax(id)
    {
        let url = "/brend_down/"+id;
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
                    let nextTr = document.querySelector(`#brendTable td[data-column-name='id'][data-column-value='${rs['nextId']}' ]`).parentElement;
                    currentTr.setAttribute('for_delete', 1);
                    nextTr.setAttribute('for_delete', 1);

                    // добавить новые 2 строки с новыми данными
                    let newCurrentTr = document.createElement('tr');
                    let newnextTr = document.createElement('tr');
                    newCurrentTr.innerHTML = rs['trCurrentHtml'];
                    newnextTr.innerHTML    = rs['trNextHtml'];
                    currentTr.before(newnextTr);
                    currentTr.before(newCurrentTr);

                    // удалить обе старые строки
                    currentTr.remove();
                    nextTr.remove();

                    // навесить обработчики на эти новые 2 строки.
                    // #show
                    let addedCurrentTrShowHandler = document.querySelector(`#brendTable td[data-column-value='${rs['currId']}'] ~ td form.modal_brend_show`);
                    let addednextTrShowHandler    = document.querySelector(`#brendTable td[data-column-value='${rs['nextId']}'] ~ td form.modal_brend_show`);
                    //conlog(addedCurrentTr);
                    //conlog(addednextTr);
                    addedCurrentTrShowHandler.addEventListener('submit', function(e){
                        modalBrendShowSelectorInner(e, addedCurrentTrShowHandler);
                    });
                    addednextTrShowHandler.addEventListener('submit', function(e){
                        modalBrendShowSelectorInner(e, addednextTrShowHandler);
                    });

                    // edit
                    let addedCurrentTrEditHandler = document.querySelector(`#brendTable td[data-column-value='${rs['currId']}'] ~ td form.modal_brend_edit`);
                    let addednextTrEditHandler    = document.querySelector(`#brendTable td[data-column-value='${rs['nextId']}'] ~ td form.modal_brend_edit`);
                    //conlog(addedCurrentTrEditHandler);
                    //conlog(addednextTrEditHandler);

                    addedCurrentTrEditHandler.addEventListener('submit', function(e){
                        modalBrendEditSelectorInner(e, addedCurrentTrEditHandler);
                    });
                    addednextTrEditHandler.addEventListener('submit', function(e){
                        modalBrendEditSelectorInner(e, addednextTrEditHandler);
                    });

                    // delete
                    deleteBrendHandler();

                    // теперь нужно навесить обработчик и на сам up
                    let addedCurrentTrUpButtonHandler = document.querySelector(`#brendTable td[data-column-value='${rs['currId']}'] ~ td form.modal_brend_up`);
                    addedCurrentTrUpButtonHandler.addEventListener('submit', function(e){
                        modalBrendUpSelectorInner(e, addedCurrentTrUpButtonHandler);
                    });
                    let addednextTrUpButtonHandler = document.querySelector(`#brendTable td[data-column-value='${rs['nextId']}'] ~ td form.modal_brend_up`);
                    addednextTrUpButtonHandler.addEventListener('submit', function(e){
                        modalBrendUpSelectorInner(e, addednextTrUpButtonHandler);
                    });
                    //conlog(addedCurrentTrUpButtonHandler);
                    //conlog(addednextTrUpButtonHandler);

                    // также нужно навесить обработчик и на down :smirk
                    let addedCurrentTrDownButtonHandler = document.querySelector(`#brendTable td[data-column-value='${rs['currId']}'] ~ td form.modal_brend_down`);
                    addedCurrentTrDownButtonHandler.addEventListener('submit', function(e){
                        modalBrendDownSelectorInner(e, addedCurrentTrDownButtonHandler);
                    });
                    let addedNextTrDownButtonHandler = document.querySelector(`#brendTable td[data-column-value='${rs['nextId']}'] ~ td form.modal_brend_down`);
                    addedNextTrDownButtonHandler.addEventListener('submit', function(e){
                        modalBrendDownSelectorInner(e, addedNextTrDownButtonHandler);
                    });
                    //conlog(addedCurrentTrUpButtonHandler);
                    //conlog(addedNextTrDownButtonHandler);

                }else{
                    conlog('down is fail!');
                }
            }
        });
        xhr.send(params);
    }

    //////////////////////
    downBrendHandler();

</script>