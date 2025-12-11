<section id="realisations" class="py-24 bg-bg-1 text-text-1">
  <div class="max-w-[1200px] mx-auto justify-self-center">

    <!-- GRID -->
    <div
      class="
        px-6 gap-12

        /* Desktop → GRID */
        lg:grid lg:grid-cols-3 lg:gap-12

        /* Mobile + Tablet → SLIDER HORIZONTAL */
        flex lg:block overflow-x-auto snap-x snap-mandatory scroll-smooth

        /* spacing des cartes dans slider */
        space-x-6 lg:space-x-0
      "
    >

      <?php 
      $projects = [
        ["name" => "G. Poitevin", "img" => "mockup_poitevin.webp"],
        ["name" => "D. Inda", "img" => "mockup_inkspire.webp"],
        ["name" => "A. Rabiller", "img" => "mockup_nebula.webp"],
      ];

      foreach ($projects as $proj): 
      ?>
      <div class="
        real-card
        bg-bg-2 border border-white/5 rounded-3xl shadow-xl hover:shadow-2xl
        transition-all duration-300

        /* SLIDER ITEM */
        snap-center flex-shrink-0 w-[85%] md:w-[50%] lg:w-auto
      ">

        <!-- HEADER -->
        <div class="real-header">
            <h3 class="text-xl font-semibold text-text-1 pl-3">
                <?= $proj['name'] ?>
            </h3>
            <div class="flex items-center gap-2 pr-3">

                <!-- Google Logo -->
                <img 
                    src="<?= url('assets/images/Google_Favicon.webp') ?>" 
                    alt="Google avis"
                    class="w-5 h-5 object-contain opacity-90"
                >

                <!-- Stars -->
                <div class="flex gap-1 text-accent-1">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg viewBox="0 0 20 20" class="w-5 h-5 star fill-current text-accent-1">
                            <polygon points="10 1.5 12.8 7.4 19.3 7.8 14.2 12.1 15.7 18.5 10 15.2 4.3 18.5 5.8 12.1 .7 7.8 7.2 7.4"/>
                        </svg>
                    <?php endfor ?>
                </div>
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