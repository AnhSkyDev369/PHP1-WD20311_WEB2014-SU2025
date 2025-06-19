<ul>
    <li>STT: <?= $course['id']?></li>
    <li>NAME: <?= $course['name']?></li>
    <li>THUMBNAIL: 
        <img src="<?= BASE_ASSETS_UPLOADS . $course['thumbnail']?>" width="100px">
    </li>
    <li>Instructor: <?= $course['instructor_name']?></li>
    <li>Duration: <?= $course['duration']?></li>
    <li>Price: <?= $course['price']?>
</ul>