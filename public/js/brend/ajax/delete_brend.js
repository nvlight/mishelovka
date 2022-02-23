
var token = "some token...";
function findTokenFunction() {
    let findToken = document.head.querySelector('meta[name="csrf-token"]');
    if (findToken){
        if (findToken.hasAttribute('content')){
            token = findToken.getAttribute('content');
        }
    }
}

function modalBrendDeleteSelectorInner(e, modalBrendDeleteSelector) {
    e.preventDefault();

    let id = modalBrendDeleteSelector.dataset.brendId;
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
                let targetTr;
                try{
                    // эта штука не работает как надо
                    // targetTr = modalBrendDeleteSelector[i].parentElement.parentElement;
                    // сделаем новую #brendTable tr form[data-brend-id=67]
                    targetTr = document.querySelector(`#brendTable tr form[data-brend-id='${id}']`).parentElement.parentElement;

                    //console.log(targetTr);
                }catch (e) {
                    console.log('error with getting && delete tr')
                }
                let isDeleted = brendDeleteAjax(id, targetTr)
            }
        })
    }
}

function deleteBrendHandler(){
    let modalBrendDeleteSelector = document.querySelectorAll('.modal_brend_delete');
    if (modalBrendDeleteSelector && modalBrendDeleteSelector.length){
        for(let i=0; i<modalBrendDeleteSelector.length; i++){
            modalBrendDeleteSelector[i].removeEventListener('submit', function(e){
                modalBrendDeleteSelectorInner(e, modalBrendDeleteSelector[i]);
            });
            modalBrendDeleteSelector[i].addEventListener('submit', function(e){
                modalBrendDeleteSelectorInner(e, modalBrendDeleteSelector[i]);
            });
        }
    }
}

function brendDeleteAjax(id, tr)
{
    let url = "/brend_delete/"+id;
    const xhr = new XMLHttpRequest();
    const params = "&_token=" + token;

    xhr.open("delete", url);

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.addEventListener("readystatechange", () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let rs = JSON.parse(xhr.responseText);
            if (rs['success']) {

                tr.remove();

                Swal.fire({
                    position: 'top-end',
                    icon: 'info',
                    title: 'Бренд был удален.',
                    showConfirmButton: false,
                    timer: 1500
                });
                //Swal.fire(
                //    'Удалено!',
                //    'Выбранный бренд был удален.',
                //    'info'
                //)
            }
        }
    });
    xhr.send(params);
}


//////////////////////
findTokenFunction();
deleteBrendHandler();
