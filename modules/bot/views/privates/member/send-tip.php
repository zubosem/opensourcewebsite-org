<b><?= Yii::t('bot', 'Group') ?>: <?= $chatTip->chat->title ?></b><?= $chatTip->chat->username ? ' (@' . $chatTip->chat->username . ')' : '' ?><br/>
<br/>
<?= Yii::t('bot', 'Reciever') ?>: <?= $chatTip->toUser->getFullLink() ?><br/>
<br/>
<?= Yii::t('bot', 'Preparation') ?>. <?= Yii::t('bot', 'Financial gift for this user') ?>.<br/>
