<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        main {
            float: right;
            width: 70%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        section#kiri{
            background-color: aquamarine;
            height: 100%;
            position: fixed;
            float: left;
            width: 20%;
            display: flex;
            padding-top: 5%;
            align-items: center;
            flex-direction: column;
            gap: 5%;
            div.button{display: flex;flex-direction: column;gap: 1vb;}
        }

        table,th,tr,td {
            border: 1px solid black;
        }
        div.square{height: 14vb;width: 14vb;background-color: aqua;border-radius: 15px;border: 2px solid black;}

        th{input{size: 100%;font-weight: 40px}}
        .tombol_magic{display: none;}
    </style>
</head>

<body>
    
    <section id=kiri>
        <div class="square"></div>
        <div class="button">
        <form action=""method="post"><button name="back">back to login page</button></form>
        <button id="to_user">user</button>
        <button>search</button>
        <?php 
        $kondisi_mboh=false;
        echo"<form action='' method='post'>";
            echo"<button name='editmaybe' >edit mode</button>";
            echo"<button name='liatmaybe' >view mode</button>";
            echo "</form> ";?>
        </div>
    </section>


    <main>
        <?php include 'shower.php';?>

        <tr>
            <form action="index.php" method="post">
                <td>?</td>
                <td><input type="text" name="nama"></td>
                <td><input type="number" name="stok" id=""></td>
                <td><select name="status" id="">
                        <option value="rusak">rusak</option>
                        <option value="baik">baik</option>
                    </select></td>
                <td><button name="add" type="submit" value="">adding.</button></td>
            </form>
        </tr>
    </table>
    </main>
    <script>
    document.getElementById('to_user').addEventListener("click",function(){
        window.location.href = "user.php";
    });

    // function cobain_edit(){
    //     $("th").replaceWith("<input>" + $("th").html() + "</input>");
    // }

 
    </script>
</body>
</html>