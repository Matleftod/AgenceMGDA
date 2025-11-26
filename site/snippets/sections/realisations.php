<section id="realisations" class="py-24 bg-bg-1 text-text-1">
  <div class="max-w-[1200px] mx-auto justify-self-center">

    <h2 class="text-4xl font-semibold text-text-3 mb-16 px-6">
      Quelques réalisations
    </h2>

    <!-- GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

      <?php 
      $projects = [
        ["name" => "G. Poitevin", "img" => "mockup_poitevin.jpg"],
        ["name" => "D. Inda", "img" => "mockup_inkspire.jpg"],
        ["name" => "A. Rabiller", "img" => "mockup_nebula.jpg"],
      ];

      foreach ($projects as $proj): 
      ?>
      <div class="real-card bg-bg-2 border border-white/5 rounded-3xl p-8 shadow-xl 
                  hover:shadow-2xl transition-all duration-300">

        <!-- HEADER -->
        <div class="mb-6">
          <h3 class="text-xl font-semibold text-text-1 mb-3">
            <?= $proj['name'] ?>
          </h3>

          <div class="flex gap-1 text-accent-1">
            <?php for ($i = 0; $i < 5; $i++): ?>
              <svg viewBox="0 0 20 20" class="w-5 h-5 star">
                <polygon points="10 1.5 12.8 7.4 19.3 7.8 14.2 12.1 15.7 18.5 10 15.2 4.3 18.5 5.8 12.1 .7 7.8 7.2 7.4"/>
              </polygon>
              </svg>
            <?php endfor ?>
          </div>
        </div>

        <!-- IMAGE -->
        <div class="real-mockup relative rounded-xl overflow-hidden">
          <img 
            src="<?= url('assets/images/mockups/' . $proj['img']) ?>" 
            alt="site <?= $proj['name'] ?>" 
            class="block w-full h-auto mockup-img"
          >
        </div>

      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>