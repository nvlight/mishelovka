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

    let modalBrendDeleteSelector = document.querySelectorAll('.modal_brend_delete');
    if (modalBrendDeleteSelector && modalBrendDeleteSelector.length){
        for(let i=0; i<modalBrendDeleteSelector.length; i++){
            modalBrendDeleteSelector[i].addEventListener('submit', function(e){
                e.preventDefault();

                let id = modalBrendDeleteSelector[i].dataset.brendId;
                //console.log('id: ' + id);

                if (id ) {
                    Swal.fire({
                        title: 'Вы уверены?',
                        text: "Вы не сможете отменить это действие!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Да, удалить это!',
                        cancelButtonText: 'Отмена',
                    }).then((result) => {
                        let str = JSON.stringify(result, null, 4); // (Optional) beautiful indented output.
                        //console.log('result: '+str);

                        if (result.isConfirmed){
                            let isDeleted = brendDeleteAjax(id)
                        }
                    })
                }
            });
        }
    }

    function brendDeleteAjax(id)
    {
        let url = "/brend_delete/"+id;
        const xhr = new XMLHttpRequest();
        const params = "&_token=" + token

        xhr.open("delete", url);

        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.addEventListener("readystatechange", () => {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let rs = JSON.parse(xhr.responseText);
                if (rs['success']) {
                    // todo - теперь надо удалить саму строку, которая уже не существует, ага!


                    Swal.fire(
                        'Удалено!',
                        'Выбранный бренд был удален.',
                        'success'
                    )
                }
            }
        });
        xhr.send(params);
    }
</script>