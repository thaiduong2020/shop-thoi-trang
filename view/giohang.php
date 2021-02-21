<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div >
        <table>
            <thead>
                <th>id</th>
                <th>name</th>
                <th>soluong</th>
                <th>gia</th>
                <th>action</th>
            </thead>
            <tbody id="list-item">
            </tbody>
        </table>
    </div>
    <script>
        const listItem = document.getElementById("list-item");
        const giohang = JSON.parse(localStorage.getItem("giohang"));
        function genTBody(data) {
            data.forEach(x => {
                const tr = document.createElement("tr");

                const td = document.createElement("td");
                td.innerHTML = x.id;
                tr.appendChild(td);

                const td2 = document.createElement("td");
                td2.innerHTML = x.name;
                tr.appendChild(td2);

                const td3 = document.createElement("td");
                td3.innerHTML = x.soluong;
                tr.appendChild(td3);

                const td4 = document.createElement("td");
                td4.innerHTML = x.gia;
                tr.appendChild(td4);

                const td5 = document.createElement("td");
                const buttonXoa = document.createElement("button");
                buttonXoa.innerHTML = "Xóa";
                buttonXoa.addEventListener("click", function(){
                  xoa(x)
                  tr.remove();
                });
                td5.appendChild(buttonXoa);
                tr.appendChild(td5);

                listItem.appendChild(tr);
            })
        }

        function xoa(x) {
            const listItem = giohang.filter(item => item.id !== x.id);
            localStorage.setItem("giohang", JSON.stringify(listItem));
        }

        genTBody(giohang);
    </script>
</body>
</html>