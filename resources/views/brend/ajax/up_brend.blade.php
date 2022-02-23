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
                    //conlog('up is done!');
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