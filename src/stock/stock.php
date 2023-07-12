<?php 
    session_start();
    if ($_SESSION['power'] != 3) {
        header("Location: ../../index.php");
    }
?>

<style>
    #container {
        display: flex;
        flex-direction: column;
        width: 30%;
        text-align: center;
        justify-content: center;
    }

    button {
        margin: 0px;
        height: 20px;
    }

    #field {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #wrapper {
        display: flex;
        flex-direction: column;
    }
    
</style>
<div id="wrapper">
<div id="inp=cont">
    <input type="text" id="name" placeholder="Name">
    <button id="add">add</button>
</div>
<div id="field">
    
    <div id="container">


    </div>
    <div id="list">
    
    </div>
</div>
<button id="save">save</button>
</div>
<script src="./stock.js"></script>