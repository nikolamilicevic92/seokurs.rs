<?php //This view extends default layout ?>

  
<div class="wrapper max-1200">
  <div class="course-full">

    <div class="clearfix">
      <span id="videoTitle"></span>
      <span id="timer">&nbsp;</span>
    </div>
    <div class="video-container">
      <video src="" controls>
        Vas browser ne podrzava video tag
      </video>
    </div>
    <div class="course-statistic">
      <p>Pregledano <span id="videosWatched"></span> od <span id="videosCount"></span> snimaka</p>
      <div class="progression-container">
        <div id="videosProgression"></div>
      </div>
      <p>Urađeno <span id="testsDone"></span> od <span id="testsCount"></span> testova</p>
      <div class="progression-container">
        <div id="testsProgression"></div>
      </div>
    </div>

    <?php if(user()->isAdmin): ?>
    <!-- Form for creating new section -->
    <form action="/section" method="POST">
      <div class="form-group">
        <label for="sectionTitle">Ime sekcije</label>
        <input type="text" class="form-control" name="title" id="sectionTitle">
      </div>
      <div class="form-group">
        <?php echo ( csrfFormField() ); ?>
        <input type="submit" class="btn btn-primary" value="Dodaj">
      </div>
    </form>
    <!-- Form for uploading new video to the section -->
    
    <!-- Form for creating new test -->
    <?php endif; ?>
    <div class="sections">
      <?php foreach($sections as $section): ?>
        <div class="section" data-id="<?php echo htmlspecialchars($section->id); ?>">
          <h2 <?php echo htmlspecialchars($editable); ?>><?php echo htmlspecialchars($section->title); ?></h2>

          <?php if(user()->isAdmin): ?>

            <!-- Button that trigers ajax call to update section name -->
            <button class="btn btn-primary update-section">Sačuvaj</button>

            <!-- Form for deleting a section -->
            <form class="delete-section" action="/section/<?php echo htmlspecialchars($section->id); ?>" method="POST">
              <?php echo ( csrfFormField() ); ?>
              <input type="hidden" name="_method" value="DELETE">
              <input type="submit" class="btn btn-danger" value="Obriši">
            </form>

          <?php endif; ?>
          <ul class="videos">
            <?php foreach($section->videos as $index => $video): ?>
            <li class="video clearfix" id="<?php echo htmlspecialchars($video->source); ?>"
              onclick="play('<?php echo htmlspecialchars($video->source); ?>')">
              <span class="video-play-icon"></span>
              <span class="index"><?php echo htmlspecialchars(($index+1) . '.'); ?></span>
              <span class="video-title"><?php echo htmlspecialchars($video->title); ?></span>
              <span class="checkbox<?php echo htmlspecialchars($video->watched); ?>"></span>
              <span class="duration"><?php echo htmlspecialchars($video->duration); ?></span>
              <input type="hidden" value="<?php echo htmlspecialchars($video->id); ?>">
              <?php if(user()->isAdmin): ?>
                <a href="/video/<?php echo htmlspecialchars($video->id); ?>/edit">
                  <button class="btn btn-primary">Izmeni</button>
                </a>
                <button class="btn btn-danger delete-video" onclick="deleteVideo(<?php echo htmlspecialchars($video->id); ?>)">Obriši</button>
              <?php endif; ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php if(user()->isAdmin): ?>
            <!-- Form for uploading new video to the section -->
            <form style="padding:15px 0;" action="/video" method="POST" enctype="multipart/form-data">
              <div class="form-group clearfix">
                <label for="videoTitle">Naslov snimka</label>
                <input type="text" name="title" class="form-control" id="videoTitle">
              </div>
              <div class="form-group">
                <input type="hidden" name="id_section" value="<?php echo htmlspecialchars($section->id); ?>">
                <label for="videoDuration">Trajanje snimka (sec)</label>
                <input type="number" name="duration" class="form-control inline" value="600">
                <input type="file" name="video">
                <?php echo ( csrfFormField() ); ?>
                <input type="submit" class="btn btn-primary" value="Upload">
              </div>
            </form>
          <?php endif; ?>
          <ul class="tests clearfix">
            <?php foreach($section->tests as $test): ?>
            <li class="test clearfix">
              <a class="test-name" href="/test/<?php echo htmlspecialchars($test->id); ?>"><?php echo htmlspecialchars($test->title); ?></a>
              <span class="checkbox<?php echo htmlspecialchars($test->done); ?>"></span>
              <a href="/test/<?php echo htmlspecialchars($test->id); ?>/edit" style="margin-right:5px;">
                <button class="btn btn-primary">Izmeni</button>
              </a>
              <form class="delete-test" action="/test/<?php echo htmlspecialchars($test->id); ?>" method="POST">
                <?php echo ( csrfFormField() ); ?>
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="btn btn-danger" value="Obriši">
              </form>
              <input type="hidden" class="test-id" value="<?php echo htmlspecialchars($test->id); ?>">
            </li> 
            <?php endforeach; ?>
          </ul>
          <?php if(user()->isAdmin): ?>
            <!-- Form for adding new test to the section -->
            <form style="padding:15px 0;" action="/test" method="POST">
              <div class="form-group clearfix">
                <label for="testTitle">Naslov testa</label>
                <input type="text" name="title" class="form-control" id="testTitle">
              </div>
              <div class="form-group">              
                <input type="hidden" name="id_section" value="<?php echo htmlspecialchars($section->id); ?>">
                <label for="videoDuration">Trajanje testa (sec)</label>
                <input type="number" name="duration" class="form-control inline" value="600">
                <?php echo ( csrfFormField() ); ?>
                <input type="submit" class="btn btn-primary" value="Dodaj">
              </div>
            </form>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="clearfix">
    <span id="toggleAside">O kursu</span>
  </div>
   
  <div class="aside">
    <h3>Šta ću naučiti?</h3>
    <?php if(user()->isAdmin): ?>
      <form action="/custom-field" method="POST">
        <div class="form-group">
          <input type="text" name="value" class="form-control">
        </div>
        <div class="form-group clearfix">
          <?php echo ( csrfFormField() ); ?>
          <input type="hidden" name="name" value="what_will_I_learn">
          <input type="hidden" name="id_page" value="<?php echo htmlspecialchars($page->id); ?>">
          <input type="submit" class="btn btn-primary float-right" value="Dodaj">
        </div>
      </form>
    <?php endif; ?>
    <div class="col-2">
      <ul class="checked-style">
        <?php foreach($cf['what_will_I_learn'] as $row): ?>
        <li <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($row->id); ?>"><?php echo htmlspecialchars($row->value); ?></li>
        <li class="clearfix">
          <?php if(user()->isAdmin): ?>
          <form class="float-right" action="/custom-field/<?php echo htmlspecialchars($row->id); ?>" method="POST">
            <?php echo ( csrfFormField() ); ?>
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" class="btn btn-danger" value="Obriši">
          </form>
          <?php endif; ?>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    
    <h3>Opis</h3>
    <?php if(user()->isAdmin): ?>
    <form action="/seo-kurs" method="POST" class="mb-50">
      <textarea name="content" id="content" style="display:none;"><?php echo htmlspecialchars($description->content); ?></textarea>
      <div id="RTE" data-target="content" data-css="assets/css/core/rich-text-editor.css"></div>
      <div class="clearfix">
        <?php echo ( csrfFormField() ); ?>
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($description->id); ?>">
        <input type="submit" class="btn btn-primary float-right" value="Sačuvaj">
      </div>
    </form>
    <?php else: ?>
      <div class="description">
        <?php echo ($description->content); ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if(user()->isAdmin): ?>
    <button id="updateCustomFields" class="btn btn-primary mb-50">Sačuvaj</button>
  <?php endif; ?>
</div>