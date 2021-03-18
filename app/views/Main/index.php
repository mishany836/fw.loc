<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<div class="container">
    <div id="answer"></div>
        <button class="btn btn-default" id="send" >Кнопка</button>
    <br>
    <?php new \vendor\widgets\menu\Menu(); ?>
        <?php if (!empty($posts)):?>
        <?php foreach ($posts as $post): ?>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #c5d7f2" text align="center"><?=$post['title'] ?></div>
                <div class="panel-body" style="background-color: #e9ecef" text align="center">
                    <?=$post['text'] ?>
                </div>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <script src="/js/test.js"></script>
    <script>
    $(function () {
        $("#send").click(function (){
            $.ajax({
                url: '/main/test',
                method: 'post',
                data: {'id': 2},
                success: function (res) {
                   // var data = JSON.parse(res);
                   // $('#answer').html('<p>Ответ: ' + data.answer + ' | Код: '+ data.code + '</p>');
                    $('#answer').html(res);
                    //console.log(res);
                },
                error: function (){
                    alert('Error!');
                }
            });
        });
    });
    </script>
<!--    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->






