<?php
require_once './model/_config.php';
$__PAGE_NAME__ = 'experiance';
$__LOAD_AOS__ = false;
require_once './model/content_model.php';
$contentModule = new ContentModel();
$data = $contentModule->getPageData();

?>
<?php require_once './layout/_header.php';?>
<?php require_once './layout/_nav.php';?>

<div class="row margin-0">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-sm-12 flex evenly-sm between-md m-b-50 js-tab-controls tab-controls">
        <button class="button-black l-s-n f-s-12" data-tab = '1'>
        <?= $contentModule->getTranslate('experience.category_1') ?>
		</button>
        <button class="button-black l-s-n f-s-12" data-tab = '2'>
        <?= $contentModule->getTranslate('experience.category_2') ?>
		</button>
        <button class="button-black l-s-n f-s-12" data-tab = '3'>
        <?= $contentModule->getTranslate('experience.category_3') ?>
		</button>
        <button class="button-black l-s-n f-s-12" data-tab = '4'>
           <?= $contentModule->getTranslate('experience.category_4') ?>
		</button>
        <button class="button-black l-s-n f-s-12" data-tab = '5'>
        <?= $contentModule->getTranslate('experience.category_5') ?>
		</button>
    </div>
    <div class="col-md-1"></div>
</div>

<div class="row margin-0">
    <div class="col-md-1"></div>
    <div class="col-md-10 flex between-md m-b-50">
        <div class="tabs__holder js-tabs-content">
			<?php foreach( $data['experiance'] as $category => $array ): ?>
                <div class="tab unactive" data-tab = '<?=$category?>'>
                    <?php foreach( $array as $k => $exp ): ?>
                        <div class="row margin-0 <?= $k%2 == 0 ? '' : 'flex-reverse' ?>">
                            <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                <a href="<?= $exp['get_files']['path'] ?>" class="glightboxtab-<?=$category?>">
                                    <img src="<?= $exp['get_files']['path'] ?>" class = 'experiance-image' alt="<?= $exp['get_files']['name'] ?>">
                                </a> 
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 experiance-<?= $k%2 == 0 ? 'right' : 'left' ?>">
                                <div class="experiance-desc">
                                    <?= $exp['description'] ?>

                                    <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                                    <ul class="experiance-list">
                                        <?php foreach( $exp['get_items'] as $item ): ?>
                                            <li><?= $item['text'] ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php if( $exp['has_gallery'] == 1 && $exp['get_gallery']['get_images'] != null ): ?>
                            <?php $chunked = array_chunk( $exp['get_gallery']['get_images'], 4 ); ?>
                            <div class="row margin-0">
                                <div class="col-md-12 experiance-gallery col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                    <?php foreach( $chunked as $chunk ): ?>
                                        <?php foreach( $chunk as $photo ): ?>
                                            <a href="<?=$photo['get_file']['path']?>" class="glightboxtab-<?=$category?>">
                                                <img src="<?=$photo['get_file']['path']?>" class = 'experiance-gallery-image' alt="<?=$photo['get_file']['name']?>">
                                            </a>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="space-separator"></div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>            

			<?php endforeach; ?>
<!-- 
            <div class="tab unactive" data-tab = '1'>

                <div class="row margin-0">
                    <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <a href="./assets/backgrounds/experiance/tab_1-1.png" class="glightboxtab-1">
                            <img src="./assets/backgrounds/experiance/tab_1-1.png" class = 'experiance-image' alt="">
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 experiance-right">
                        <div class="experiance-desc">
                            <p>
                            We make self-supporting smoke exhaust ducts and ventilation in <span class = 'colorBlue'> <strong>Promat technology</strong> (Promaduct L-500 EIS 60, EIS 120) </span> in metro stations, stadiums, shopping malls and other large surface buildings.
                            </p>

                            <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                            <ul class="experiance-list">
                                <li>self-supporting wires made of fireproof boards with a thickness of 30-50mm achieve the fire resistance class EIS 60, EIS 120;</li>
                                <li>it can be used at high working pressures;</li>
                                <li>the possibility of securing steel sheet canals;</li>
                                <li>high tightness - low pressure losses;</li>
                                <li>maintaining constant cross-section dimensions in fire conditions;</li>
                                <li>the largest permissible cable cross-sections on the Polish market.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row margin-0">
                    <div class="col-md-12 experiance-gallery col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <a href="./assets/backgrounds/experiance/tab_1-slide-1.png" class="glightboxtab-1">
                            <img src="./assets/backgrounds/experiance/tab_1-slide-1.png" class = 'experiance-gallery-image' alt="">
                        </ col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1a>
                        <a href="./assets/backgrounds/experiance/tab_1-slide-2.png" class="glightboxtab-1">
                            <img src="./assets/backgrounds/experiance/tab_1-slide-2.png" class = 'experiance-gallery-image' alt="">
                        </ col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1a>
                        <a href="./assets/backgrounds/experiance/tab_1-slide-3.png" class="glightboxtab-1">
                            <img src="./assets/backgrounds/experiance/tab_1-slide-3.png" class = 'experiance-gallery-image' alt="">
                        </ col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1a>
                        <a href="./assets/backgrounds/experiance/tab_1-slide-4.png" class="glightboxtab-1">
                            <img src="./assets/backgrounds/experiance/tab_1-slide-4.png" class = 'experiance-gallery-image' alt="">
                        </a>
                    </div>
                </div>

                <div class="row margin-0">
                    <div class="col-md-6 col-sm-12 col-xs-12 experiance-left">
                        <div class="experiance-desc">
                            <p>
                            Fire protection of steel ventilation and air conditioning ducts - <span class = 'colorBlue'> Conlit PLUS EIS 60, EIS 120 system. </span>
                            </p>

                            <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                            <ul class="experiance-list">
                                <li>ventilation and air-conditioning ducts secured with a 60mm thick Conlit Plus system achieve the fire resistance class EIS 60, EIS 120;</li>
                                <li>high tightness - low pressure losses;</li>
                                <li>the possibility of four-and two-sided housing;</li>
                                <li>low weight of the housing.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <a href="./assets/backgrounds/experiance/tab_1-2.png" class="glightboxtab-1">
                            <img src="./assets/backgrounds/experiance/tab_1-2.png" class = 'experiance-image' alt="">
                        </a>
                    </div>
                </div>

            </div>
            <div class="tab unactive" data-tab = '2'>
                    <div class="row margin-0">
                        <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <a href="./assets/backgrounds/experiance/tab_2-1.png" class="glightboxtab-2">
                                <img src="./assets/backgrounds/experiance/tab_2-1.png" class = 'experiance-image' alt="">
                            </a>
                        </div>
                        <div class="col-md-6 experiance-right">
                            <div class="experiance-desc">
                                <p>
                                    Fire protection of steel structures up to R 30, R 60 and R 120.
                                </p>
                                <p>
                                    The protection of steel structures can be divided into three types:
                                </p>

                                <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                                <ul class="experiance-list">
                                    <li>protection of steel structure by painting with water-based paint, for example: Promapaint S. We can protect fire-proof elements of steel structures and steel zinc structures with open and closed profiles, used inside and outside objects, in environments with corrosive aggressiveness from C1 to C5- M. Fire resistance class of protection R 15, R 30, R 60;</li>
                                    <li>protection of the steel structure through a plate casing of posts and steel beams. In principle, for this purpose we use cladding from Promatect-L, Promatect-H and the Conlit 150 system. The advantage of using a panel housing is to achieve the highest fire resistance class R 240, there is also the possibility of using lower fire resistance classes such as R 15, R 30, R 60 , R 120;</li>
                                    <li>protection of steel structure through the use of spray masses, such as: Dossolan 2000s. Fire resistance class of protection R 15, R 30, R 60, R 120, R 240.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="space-separator"></div>

                    <div class="row margin-0">
                        <div class="col-md-6 experiance-left">
                            <div class="experiance-desc">
                                <p>
                                    Fire protection of wooden structures up to REI 30, REI 60, REI 120.
                                </p>
                                <p>
                                    Wooden constructions can be protected by painting for flammability in some cases to NRO (fire-retardant). Securing wooden supporting structure for R 15, R 30, R 60, R 120 and ceilings on wooden beams up to REI 30, REI 60 and REI 120 is possible with <span class = 'colorBlue'> Promat Top, Promaxon Type A or Promatect </span>
                                </p>

                                <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                                <ul class="experiance-list">
                                    <li>high aesthetics of finishing;</li>
                                    <li>quick and easy assembly.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <a href="./assets/backgrounds/experiance/tab_2-2.png" class="glightboxtab-2">
                                <img src="./assets/backgrounds/experiance/tab_2-2.png" class = 'experiance-image' alt="">
                            </a>
                        </div>
                    </div>

                    <div class="space-separator"></div>

                    <div class="row margin-0">
                        <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <a href="./assets/backgrounds/experiance/tab_2-3.png" class="glightboxtab-2">
                                <img src="./assets/backgrounds/experiance/tab_2-3.png" class = 'experiance-image' alt="">
                            </a>
                        </div>
                        <div class="col-md-6 experiance-right">
                            <div class="experiance-desc">
                                <p>
                                    Execution of holes and inspection hatches and their protection for fire resistance EI 60, EI 120.
                                </p>

                                <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                                <ul class="experiance-list">
                                    <li>possibility of making access hatches in massive, light walls, ceilings and suspended ceilings;</li>
                                    <li>complete assembly equipment;</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="space-separator"></div>

                    <div class="row margin-0">
                        <div class="col-md-6 experiance-left">
                            <div class="experiance-desc">
                                <p>
                                    Fire protection of reinforced concrete elements for fire resistance REI 30, REI 60, REI 120, REI 240.
                                </p>
                                <p>
                                    We provide fire protection of elements and reinforced concrete structure in the technology of Fire Pro Conlit 150 and Promatect-H. The thickness of the cladding from fire protection panels depends on the existing thickness of the concrete cover (or lack thereof).
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <a href="./assets/backgrounds/experiance/tab_2-4.png" class="glightboxtab-2">
                                <img src="./assets/backgrounds/experiance/tab_2-4.png" class = 'experiance-image' alt="">
                            </a>
                        </div>
                    </div>
            </div>
            <div class="tab unactive" data-tab = '3'>
                    <div class="row margin-0">
                        <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <a href="./assets/backgrounds/experiance/tab_3-1.png" class="glightboxtab-3">
                                <img src="./assets/backgrounds/experiance/tab_3-1.png" class = 'experiance-image' alt="">
                            </a>
                        </div>
                        <div class="col-md-6 experiance-right">
                            <div class="experiance-desc">
                                <p>
                                Execution of light partition walls and casing of installation shafts for EI 30, EI 60, EI 120 can also be obtained with class R.
                                </p>

                                <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                                <ul class="experiance-list">
                                    <li>small wall thicknesses;</li>
                                    <li>good sound insulation;</li>
                                    <li>possibility of mounting inspection hatches;</li>
                                    <li>high aesthetics of finishing.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="space-separator"></div>
                    <div class="row margin-0">
                        <div class="col-md-6 experiance-left">
                            <div class="experiance-desc">
                                <p>
                                    Fire protection of wooden structures up to REI 30, REI 60, REI 120.
                                </p>
                                <p>
                                    Wooden constructions can be protected by painting for flammability in some cases to NRO (fire-retardant). Securing wooden supporting structure for R 15, R 30, R 60, R 120 and ceilings on wooden beams up to REI 30, REI 60 and REI 120 is possible with <span class = 'colorBlue'> Promat Top, Promaxon Type A or Promatect </span>
                                </p>

                                <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                                <ul class="experiance-list">
                                    <li>high aesthetics of finishing;</li>
                                    <li>quick and easy assembly.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <a href="./assets/backgrounds/experiance/tab_3-2.png" class="glightboxtab-3">
                                <img src="./assets/backgrounds/experiance/tab_3-2.png" class = 'experiance-image' alt="">
                            </a>
                        </div>
                    </div>
                    <div class="space-separator"></div>
                    <div class="row margin-0">
                        <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <a href="./assets/backgrounds/experiance/tab_3-3.png" class="glightboxtab-3">
                                <img src="./assets/backgrounds/experiance/tab_3-3.png" class = 'experiance-image' alt="">
                            </a>
                        </div>
                        <div class="col-md-6 experiance-right">
                            <div class="experiance-desc">
                                <p>
                                    Fire-resistant glass EI 15, EI 30, EI 60, EI 120
                                </p>

                                <p>
                                    We also make fireproof glazing from Promaglas systems which is a complex, multi-layer special fireproof glass. Layers of gel between the glass panes producing at high temperature.
                                </p>

                                <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                                <ul class="experiance-list">
                                    <li>walls all glass with vertical or horizontal silicone joints;</li>
                                    <li>construction in steel or wooden frames;</li>
                                    <li>Maximum transparency due to thin profiles and large glass dimensions;</li>
                                    <li>fireproof doors with very narrow steel profiles.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="tab unactive" data-tab = '4'>
                        <div class="row margin-0">
                            <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                <a href="./assets/backgrounds/experiance/tab_4-1.png" class="glightboxtab-4">
                                    <img src="./assets/backgrounds/experiance/tab_4-1.png" class = 'experiance-image' alt="">
                                </a>
                            </div>
                            <div class="col-md-6 experiance-right">
                                <div class="experiance-desc">
                                    <p>
                                        Fire protection of joints and dilatation for fire resistance EI 60, EI 120, EI 240.
                                    </p>

                                    <p>
                                    We are able to protect each dilatation in accordance with the fire protection conditions of the facility. We use many leading manufacturers such as Hilti, Promat Top, Rockwool. We have a wide offer for dilation protection.
                                    </p>

                                    <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                                    <ul class="experiance-list">
                                        <li>the possibility of sealing expansion joints in massive and light barriers fire protection of expansion joints;</li>
                                        <li>the possibility of using slot elements;</li>
                                        <li>the possibility of securing dilatation on one side only;</li>
                                        <li>fire protection of expansion joints;</li>
                                        <li>the possibility of securing dilatation between the wall and the roof made of trapezoidal sheet.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="tab unactive" data-tab = '5'>
                    <div class="row margin-0">
                        <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <a href="./assets/backgrounds/experiance/tab_5-1.png" class="glightboxtab-5">
                                <img src="./assets/backgrounds/experiance/tab_5-1.png" class = 'experiance-image' alt="">
                            </a>
                        </div>
                        <div class="col-md-6 experiance-right">
                            <div class="experiance-desc">
                                    <p>
                                        Fire protection for the passage of installation pipes, cable penetrations and combined passes to EI 60, EI 120, EI 240
                                    </p>
                                    <p>
                                    Our company, when securing all kinds of installation passes, uses many leading companies producing fire protection protections such as: PROMAT TOP, ROCKWOOL, HILTI, NICZUK, WALRAVEN. These protections are made in various fire resistance classes depending on the fire resistance class of the building. We have a wide offer for protection of installation transitions. The implementation of fire transitions is characterized by several fundamental issues:
                                    </p>

                                    <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                                    <ul class="experiance-list">
                                        <li>a wide possibility of making protection using masses, fireproof mortars and mineral wool</li>
                                        <li>the possibility of securing all types of installations in one pass (combined transitions);</li>
                                        <li>small thickness of the installation transition.</li>
                                    </ul>
                            </div>
                        </div>
                    </div>

                    <div class="space-separator"></div>
                    <div class="row margin-0">
                        <div class="col-md-6 experiance-left">
                        <div class="experiance-desc">
                                <p>
                                    Fire protection of electric cables and wires;
                                </p>

                                <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                                <ul class="experiance-list">
                                    <li>design of cable ducts to protect electrical installations;  </li>
                                    <li>possibility of ensuring continuous supply of energy and signal for 120 minutes;</li>
                                    <li>quick montage;</li>
                                    <li>light construction, low weight;</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <a href="./assets/backgrounds/experiance/tab_5-2.png" class="glightboxtab-5">
                                <img src="./assets/backgrounds/experiance/tab_5-2.png" class = 'experiance-image' alt="">
                            </a>
                        </div>
                    </div>
                    <div class="space-separator"></div>
                    <div class="row margin-0">
                        <div class="col-md-6 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <a href="./assets/backgrounds/experiance/tab_5-3.png" class="glightboxtab-5">
                                <img src="./assets/backgrounds/experiance/tab_5-3.png" class = 'experiance-image' alt="">
                            </a>
                        </div>
                        <div class="col-md-6 experiance-right">
                            <div class="experiance-desc">
                                <p>
                                    Fire spraying systems from REI 30 to REI 240
                                </p>

                                <h4 class="blue-header checkbox__list--title"><?= $contentModule->getTranslate('details_and_benefits') ?></h4>

                                <ul class="experiance-list">
                                    <li>steel, reinforced concrete and prestressed structures;</li>
                                    <li>constructions made of trapezoidal sheet metal;</li>
                                    <li>thermal and acoustic;</li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div> -->
    </div>
    <div class="col-md-1"></div>
</div>

<script>
    var $_ACTIVE_TAB = <?=isset($_GET['tab']) ? $_GET['tab'] : 1?>;
</script>

<?php require_once './layout/_footer.php';?>