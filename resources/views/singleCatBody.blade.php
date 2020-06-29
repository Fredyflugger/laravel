<?php foreach($newsData[$cat] as $key=>$value): ?>
<a href="{{ url()->current() }}/<?php echo $value; ?>?cat={{ $cat }}&news=<?php echo $key; ?>"><?php echo $value; ?></a>
<?php endforeach; ?>