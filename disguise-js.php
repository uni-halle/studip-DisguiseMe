jQuery(function ($) {
        console.log(1);
    $('<a/>').attr('href', '<?= $link ?>')
        .text(" Als dieser Nutzer einloggen".toLocaleString())
        .prepend('<?= Assets::img('icons/16/red/door-enter.png') ?>')
        .before('<br/>')
        .insertAfter('#user_profile td:first > :not(br):last');
});
