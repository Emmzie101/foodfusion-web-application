<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<section class="recipes-page">

  <!-- HERO -->
  <header class="recipes-hero">
    <h1>Recipe Collection</h1>
    <p>
      A curated selection of dishes from cultures around the world —
      crafted, shared, and celebrated.
    </p>
  </header>

  <!-- FILTER BAR -->
  <section class="recipe-filters">
    <select id="cuisineFilter">
      <option value="all">All Cuisines</option>
      <option value="african">African</option>
      <option value="italian">Italian</option>
      <option value="asian">Asian</option>
    </select>

    <select id="dietFilter">
      <option value="all">All Diets</option>
      <option value="vegan">Vegan</option>
      <option value="vegetarian">Vegetarian</option>
      <option value="meat">Meat-Based</option>
    </select>

    <select id="difficultyFilter">
      <option value="all">All Levels</option>
      <option value="easy">Easy</option>
      <option value="medium">Medium</option>
      <option value="hard">Hard</option>
    </select>
  </section>

  <!-- GRID -->
  <section class="recipes-grid" id="recipesGrid">

    <!-- CARD -->
    <article class="recipe-card"
      data-cuisine="african"
      data-diet="meat"
      data-difficulty="medium">

      <div class="recipe-image">
        <img src="../assets/images/recipes/jollof.jpg" alt="Jollof Rice">
      </div>

      <div class="recipe-info">
        <h3>Jollof Rice</h3>
        <p>A West African classic rich in flavour and tradition.</p>

        <div class="recipe-meta">
          <span>African</span>
          <span>Medium</span>
        </div>
      </div>
    </article>

    <!-- CARD -->
    <article class="recipe-card"
      data-cuisine="italian"
      data-diet="vegetarian"
      data-difficulty="easy">

      <div class="recipe-image">
        <img src="../assets/images/recipes/pasta.jpg" alt="Creamy Pasta">
      </div>

      <div class="recipe-info">
        <h3>Creamy Mushroom Pasta</h3>
        <p>A comforting Italian-inspired vegetarian dish.</p>

        <div class="recipe-meta">
          <span>Italian</span>
          <span>Easy</span>
        </div>
      </div>
    </article>

    <!-- CARD -->
    <article class="recipe-card"
      data-cuisine="asian"
      data-diet="vegan"
      data-difficulty="easy">

      <div class="recipe-image">
        <img src="../assets/images/recipes/salad.jpg" alt="Sesame Salad">
      </div>

      <div class="recipe-info">
        <h3>Sesame Ginger Salad</h3>
        <p>Fresh, vibrant, and plant-based.</p>

        <div class="recipe-meta">
          <span>Asian</span>
          <span>Easy</span>
        </div>
      </div>
    </article>

    <article class="recipe-card" data-cuisine="african" data-diet="meat" data-difficulty="medium">
  <div class="recipe-image">
    <img src="../assets/images/recipes/egusi.jpg" alt="Egusi Soup">
  </div>
  <div class="recipe-info">
    <h3>Egusi Soup</h3>
    <p>A rich melon-seed soup loved across West Africa.</p>
    <div class="recipe-meta"><span>African</span><span>Medium</span></div>
  </div>
</article>

<article class="recipe-card" data-cuisine="african" data-diet="vegan" data-difficulty="easy">
  <div class="recipe-image">
    <img src="../assets/images/recipes/moimoi.jpg" alt="Moin Moin">
  </div>
  <div class="recipe-info">
    <h3>Moin Moin</h3>
    <p>Steamed bean pudding, soft and protein-rich.</p>
    <div class="recipe-meta"><span>African</span><span>Easy</span></div>
  </div>
</article>

<article class="recipe-card" data-cuisine="african" data-diet="meat" data-difficulty="medium">
  <div class="recipe-image">
    <img src="../assets/images/recipes/ogbono.jpg" alt="Ogbono Soup">
  </div>
  <div class="recipe-info">
    <h3>Ogbono Soup</h3>
    <p>A rich "draw" soup loved across West Africa.</p>
    <div class="recipe-meta"><span>African</span><span>Medium</span></div>
  </div>
</article>


<article class="recipe-card" data-cuisine="asian" data-diet="vegan" data-difficulty="easy">
  <div class="recipe-image">
    <img src="../assets/images/recipes/stirfry.jpg" alt="Vegetable Stir Fry">
  </div>
  <div class="recipe-info">
    <h3>Vegetable Stir Fry</h3>
    <p>Quick, colorful, and packed with nutrients.</p>
    <div class="recipe-meta"><span>Asian</span><span>Easy</span></div>
  </div>
</article>

<article class="recipe-card" data-cuisine="asian" data-diet="meat" data-difficulty="medium">
  <div class="recipe-image">
    <img src="../assets/images/recipes/ramen.jpg" alt="Ramen">
  </div>
  <div class="recipe-info">
    <h3>Chicken Ramen</h3>
    <p>Comforting noodle soup with rich broth.</p>
    <div class="recipe-meta"><span>Asian</span><span>Medium</span></div>
  </div>
</article>

<article class="recipe-card" data-cuisine="african" data-diet="vegetarian" data-difficulty="easy">
  <div class="recipe-image">
    <img src="../assets/images/recipes/friedrice.jpg" alt="Vegetable Fried Rice">
  </div>
  <div class="recipe-info">
    <h3>Vegetable Fried Rice</h3>
    <p>A festive rice dish with bold seasoning.</p>
    <div class="recipe-meta"><span>African</span><span>Easy</span></div>
  </div>
</article>

<article class="recipe-card" data-cuisine="asian" data-diet="vegetarian" data-difficulty="medium">
  <div class="recipe-image">
    <img src="../assets/images/recipes/dumplings.jpg" alt="Vegetable Dumplings">
  </div>
  <div class="recipe-info">
    <h3>Vegetable Dumplings</h3>
    <p>Steamed parcels filled with seasoned vegetables.</p>
    <div class="recipe-meta"><span>Asian</span><span>Medium</span></div>
  </div>
</article>

<article class="recipe-card" data-cuisine="italian" data-diet="vegetarian" data-difficulty="easy">
  <div class="recipe-image"><img src="../assets/images/recipes/bruschetta.jpg"></div>
  <div class="recipe-info"><h3>Bruschetta</h3><p>Grilled bread with tomatoes and herbs.</p>
  <div class="recipe-meta"><span>Italian</span><span>Easy</span></div></div>
</article>

<article class="recipe-card" data-cuisine="african" data-diet="meat" data-difficulty="hard">
  <div class="recipe-image"><img src="../assets/images/recipes/pepper-soup.jpg"></div>
  <div class="recipe-info"><h3>Pepper Soup</h3><p>Spicy broth with aromatic local spices.</p>
  <div class="recipe-meta"><span>African</span><span>Hard</span></div></div>
</article>

<article class="recipe-card" data-cuisine="asian" data-diet="meat" data-difficulty="easy">
  <div class="recipe-image"><img src="../assets/images/recipes/fried-noodles.jpg"></div>
  <div class="recipe-info"><h3>Fried Noodles</h3><p>Street-style noodles tossed in sauce.</p>
  <div class="recipe-meta"><span>Asian</span><span>Easy</span></div></div>
</article>

<article class="recipe-card" data-cuisine="italian" data-diet="meat" data-difficulty="medium">
  <div class="recipe-image"><img src="../assets/images/recipes/pizza.jpg"></div>
  <div class="recipe-info"><h3>Margherita Pizza</h3><p>Classic pizza with fresh basil.</p>
  <div class="recipe-meta"><span>Italian</span><span>Medium</span></div></div>
</article>

<article class="recipe-card" data-cuisine="african" data-diet="vegetarian" data-difficulty="medium">
  <div class="recipe-image"><img src="../assets/images/recipes/okro.jpg"></div>
  <div class="recipe-info"><h3>Okro Soup</h3><p>Light, nutritious, and comforting.</p>
  <div class="recipe-meta"><span>African</span><span>Medium</span></div></div>
</article>


  </section>

</section>

<script src="../assets/js/recipes-filter.js"></script>

<?php include '../includes/footer.php'; ?>
