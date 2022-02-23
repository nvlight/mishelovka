function conlog($value){
    console.log($value);
}

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
        });

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

                    // эта штука getBrendHandler(); приводит к наслоению обработчиков
                    // ищем новое решение
                    let id = rs['createdId'];
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

                        //console.log(targetTr);
                    }catch (e) {
                        console.log('error with getting && delete tr')
                    }

                    deleteBrendHandler();
                }

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Бренд был создан.',
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
                    'Ошибка при создании бренда.<br>' + div.outerHTML,
                    'error'
                )
            }
        }
    });
    xhr.send(params);
}