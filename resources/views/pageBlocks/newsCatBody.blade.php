<?php foreach ($newsData as $key => $value) : ?>
    <a href="{{ route('news') }}/<?php echo $key; ?>"><?php echo $key; ?></a>
<?php endforeach; ?>