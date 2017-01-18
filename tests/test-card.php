<?php

use ics042\AdminBsb\widgets\Card;

/* @var $this yii\base\View */
?>
<?php $this->beginBlock('tables') ?>
    <div class="body table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>USERNAME</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Larry</td>
                    <td>Jellybean</td>
                    <td>@lajelly</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Larry</td>
                    <td>Kikat</td>
                    <td>@lakitkat</td>
                </tr>
            </tbody>
        </table>
    </div>
<?php $this->endBlock() ?>

<?= Card::widget([
    'title' => 'Test Card',
    'headerTools' => ['<button type="button" class="btn bg-red waves-effect">RED</button>','<button type="button" class="btn bg-light-blue waves-effect">Blue</button>'],
    'content' => $this->blocks['tables'],
    ]) ?>

<?= Card::widget([
    'title' => 'Test Card2',
    'headerColor' => 'bg-red',
    'headerTools' => ['<a class="waves-effect">RED</a>','<a class="waves-effect">Blue</a>'],
    'headerToolsType' => Card::HEADER_TOOLS_DROPDOWN,
    'content' => 'Hello World',
    ]) ?>