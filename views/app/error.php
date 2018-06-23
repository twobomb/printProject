<pre>
<?PHP
//echo print_r($exception);
?>
    </pre>
        <h1 style="text-align: center;">Ошибка: <?php echo $exception->statusCode; ?></h1>
        <h3 style="text-align: center;"> <?php
            switch ($exception->statusCode){
                case 404:
                    echo "Страница не найдена!";
                    break;
            }
            ?></h3>
