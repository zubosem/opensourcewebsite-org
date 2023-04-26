<?php

use app\models\WalletTransaction;

?>
<b><?= Yii::t('bot', 'Transaction') ?> <?= Yii::$app->formatter->asDateTime($walletTransaction->getCreatedAtByUser()); ?></b><br/>
<br/>
<?= Yii::t('bot', 'Sender') ?>: <?= $walletTransaction->fromUser->botUser->getFullLink() ?><br/>
<?= Yii::t('bot', 'Receiver') ?>: 
<?php if ($walletTransaction->anonymity): ?>
<?php if ($walletTransaction->type == WalletTransaction::SEND_ANONYMOUS_ADMIN_TIP_TYPE && !empty($chatTip->id)): ?>
<b><?= $chatTip->chat->title ?></b><?= $chatTip->chat->username ? ' (@' . $chatTip->chat->username . ')' : '' ?><br/>
<?php endif; ?>
<?php else: ?>
<?= $walletTransaction->toUser->botUser->getFullLink() ?><br />
<?php endif; ?>
<?= Yii::t('bot', 'Description') ?>: <?= $walletTransaction->getTypeLabel() ?>
<br/>
<?= Yii::t('bot', 'Amount') ?>: <?= $walletTransaction->getAmount() ?> <?= $walletTransaction->currency->code ?><br/>
<?= Yii::t('bot', 'Fee') ?>: <?= $walletTransaction->fee ?> <?= $walletTransaction->currency->code ?><br/>
