<div class="titulo">Integração CSS</div>

<H1 center>
<?php 
echo 'Olá';
echo '<small>';
echo ' Mundo';
echo '</small>';
?>
</H1>

<?= "<div>Outra forma de me 'expressar'!</div>" ?>

<br>
<div><button><?= 'Legal' ?></button></div>

<style>
    button{
        padding: 5px 20px;
        background-color: #4286f4;
        color: #EEE;
        border-radius: 10px
    }
    [center]{
        display: flex;
        justify-content: center;
    }
    [azul]:{
        color: #4286f4;
    }
    [dobro]{
        font-size: 2rem;
    }
</style>