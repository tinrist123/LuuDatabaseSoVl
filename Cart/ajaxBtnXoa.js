document.addEventListener("DOMContentLoaded", function () {
    let listBtnXoa = document.getElementsByClassName("js-btnXoa");
    // console.log(listBtnXoa);
    let parentRow = document.getElementsByClassName('row')[2];
    // console.log(parentRow.childNodes);


    for (let i = 0; i < listBtnXoa.length; i++) {


        listBtnXoa[i].addEventListener('click', function (e) {
            let posDeteleItem = 2 * (i + 1) + 1;
            // console.log(posDeteleItem);
            console.log(e.target.parentNode);

            // let hr = new XMLHttpRequest();

            // let url = "./btnXoaCart.php";

            // let variablesPost = "";

            // hr.open("POST", url, true);
            // hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            // hr.onreadystatechange = function () {
            //     if (hr.readyState == 4 && hr.status == 200) {
            //         let return_data = hr.responseText;
            //         console.log(1);

            //         parentRow.removeChild(parentRow.childNodes[posDeteleItem]);
            //     }
            // }

            // hr.send(variablesPost);
        })
    }
})