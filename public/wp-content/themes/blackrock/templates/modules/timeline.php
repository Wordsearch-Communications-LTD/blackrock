<?php 
    $title = get_sub_field('timeline_title');
    $timeline = get_sub_field('timeline');
    $legal = get_sub_field('legal_introduction_text');
?>

<section class="timeline <?= ($legal) ? 'has-legal' : ''; ?>"> 
    
    <nav class="timeline_nav">
        <div class="stick">
            <?= $title ?>
            <ul>
            <?php foreach($timeline as $index => $time): ?>
              <li><button <?= ($index == 0) ? ' class="active"' : ''; ?> data-timeline-index="<?= $index ?>"><span><?= leadingZero($index) ?></span> <?= $time['title'] ?> </button></li>
            <?php endforeach; ?>
            </ul>
        </div>
    </nav>

    

		<div class="timeline_data">
			
			<?php if($legal): ?>
				<div id="legal-intro-text">
					<?= $legal ?>
				</div>
			<?php endif ?>

			<div class="timeline-articles">
			<?php foreach($timeline as $index => $time): ?>
				<article <?= ($index == 0) ? ' class="active"' : ''; ?> data-timeline-index="<?= $index ?>">
					<header>
						<span class="number"><?= leadingZero($index) ?>/</span> <span class="title"><?= $time['title'] ?></span>
						<button class="close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_66_3961)"> <path d="M7.48535 24.4853L24.4559 7.51473" stroke="black" stroke-width="2"/> <path d="M24.4558 24.4853L7.48525 7.51473" stroke="black" stroke-width="2"/> </g> <defs> <clipPath id="clip0_66_3961"> <rect width="32" height="32" fill="white"/> </clipPath> </defs> </svg></button>
					</header>
					<div class="content">
						<div class="container">
							<?= $time['content'] ?>
						</div>
					</div>
				</article>
			<?php endforeach; ?>
			</div>
		</div>
</section>