<?php get_header(); ?>
<!-- change to section -->
<section id="top-fifty-accessories">
    <div class="accessories-top">
        <h1>Top 50 Accessories</h1>
        <div id="currency">
            <select id="select-currency">
                <option value="gbp">GBP</option>
                <option value="eur">EUR</option>
                <option value="usd">USD</option>
            </select>
        </div>
    </div>
    <div id="container-accessories">
        <?php
        foreach ($topFiftyAccessories as $accessory) {
        ?>
            <div class="single-accessory">
                <div class="accessory-info">
                    <h3><?php echo $accessory->name; ?></h3>
                    <p class="sold-items">Sold: <?php echo $accessory->sold; ?></p>
                </div>
                <div class="price gbp">
                    <p class="sale">£<?php echo $accessory->price->GBP->sale; ?></p>
                    <p class="regular">£<?php echo $accessory->price->GBP->regular; ?></p>
                </div>
                <div class="price eur">
                    <p class="sale">€<?php echo $accessory->price->EUR->sale; ?></p>
                    <p class="regular">€<?php echo $accessory->price->EUR->regular; ?></p>
                </div>
                <div class="price usd">
                    <p class="sale">$<?php echo $accessory->price->USD->sale; ?></p>
                    <p class="regular">$<?php echo $accessory->price->USD->regular; ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>

<?php get_footer(); ?>