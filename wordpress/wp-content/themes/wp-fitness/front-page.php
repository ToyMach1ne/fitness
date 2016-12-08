<?php /* Template Name: Home */ get_header(); ?>

<!-- 1st BLOCK -->
<div class="node node359 section section-elements">
            <div class="wrapper1" style="color: rgb(51, 51, 51);">
                <div class="wrapper2">
                    <div class="container noanimate" style="height: 20px;"></div>
                    <div class="container">
                        <div class="cont"></div>
                    </div>
                    <div class="container header-simple">
                        <h2 class="font-header spans title textable"><span class="p" style="font-size: 200%;"><strong><?php the_field('title'); ?></strong></span></h2>
                        <div class="spans subtitle textable"><span class="p" style="font-size: 110%;"><?php the_field('undertitle'); ?></span></div>
                    </div>
                    <div class="container">
                        <div class="cont"></div>
                        <div class="s-elements-wrapper incon">
                            <div class="s-elements-grid valign-top xs-wrap" style="margin-left: -10px; margin-right: -10px;">
                            <?php if( have_rows('purpose') ): ?>
                                <?php while( have_rows('purpose') ): the_row();
                                 // vars
                                 $image = get_sub_field('purpose_image');
                                                                        ?>
                                <div class="s-elements-grid__cell">
                                    <div class="s-elements-grid__cellwrapper" style="padding-top: 10px; padding-bottom: 10px; padding-right: 10px;">
                                        <div class="cont cell">
                                            <div class="node node360 widget widget-element">
                                                <div class="wrapper1" style="color: rgb(51, 51, 51); border-radius: 0px;">
                                                    <div class="wrapper2" style="padding: 5px;">
                                                        <div class="cont">
                                                            <div class="node node361 widget widget-imagedtext">
                                                                <div class="wrapper1" style="color: rgb(51, 51, 51); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 5px;">

                                                                        <div class="tbl middle">
                                                                            <div class="td icon" style="width: 128px;">
                                                                                <div class="wrap">
                                                                                  <div>
                                                                                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                                                                        <svg class="svgicon" id="svg361" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                                                                                            <rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(45, 106, 161); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect>
                                                                                            <g transform="scale(0.45) translate(36.66666666666667, 36.66666666666667)">
                                                                                                <path fill="rgb(45, 106, 161)" d="M30,60C13.458,60,0,46.543,0,30C0,13.458,13.458,0,30,0c16.543,0,30,13.458,30,30 C60,46.543,46.543,60,30,60z M30,2.937C15.076,2.937,2.937,15.077,2.937,30S15.076,57.064,30,57.064 c14.923,0,27.064-12.142,27.064-27.064S44.923,2.937,30,2.937z"></path>
                                                                                                <path fill="rgb(45, 106, 161)" d="M27.445,37.268l-0.095-1.229c-0.284-2.556,0.567-5.347,2.933-8.186c2.129-2.508,3.312-4.354,3.312-6.482 c0-2.413-1.515-4.021-4.495-4.068c-1.703,0-3.596,0.567-4.778,1.467l-1.135-2.981c1.561-1.136,4.258-1.892,6.765-1.892 c5.442,0,7.901,3.358,7.901,6.954c0,3.218-1.798,5.536-4.069,8.232c-2.081,2.461-2.838,4.543-2.697,6.956l0.048,1.229H27.445z M26.404,43.891c0-1.749,1.182-2.98,2.839-2.98c1.655,0,2.791,1.231,2.791,2.98c0,1.657-1.088,2.935-2.839,2.935 C27.54,46.825,26.404,45.548,26.404,43.891z"></path>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

<div class="td text">
         <div style="padding-left: 20px;">
             <div class="cont"></div>
               <h2 class="textable" style="margin-bottom: 0px;"><p style="font-size: 150%;"><span style="color: rgb(0, 0, 0);"><span style="font-size: 20px;">
               <strong><?php  the_sub_field('purpose_description'); ?></strong></span></span></p></h2>
                 <div class="cont"></div>
                  </div>
                                                                            </div><!-- td text -->
                                                                        </div><!-- tbl middle -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- s-elements-grid__cell -->
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div><!-- s-elements-wrapper incon -->
                        <div class="cont"></div>
                    </div><span class="plplink"></span>
                    <div class="container noanimate" style="height: 20px;"></div>
                </div>
            </div>
        </div>
        <!-- END OF 1st BLOCK -->

        <!-- 2nd BLOCK -->
        <div class="node node368 section section-elements" id="id1">
            <div class="wrapper1" style="background-color: rgb(5, 11, 16); color: rgb(255, 255, 255);">
                <div class="wrapper2">
                    <div class="container noanimate" style="height: 0px;"></div>
                    <div class="container">
                        <div class="cont"></div>
                    </div>
                    <div class="container header-simple">
                        <h2 class="font-header spans title textable"><span class="p" style="font-size: 200%;"><strong><?php the_field('programm'); ?><a href="http://online.fitnesstut.ru/"></a></strong></span></h2>
                        <div class="spans subtitle textable"><span class="p" style="font-size: 110%;"><?php the_field('undersloganprogramm'); ?></span></div>
                    </div>
                    <div class="container">
                        <div class="cont"></div>
                        <div class="s-elements-wrapper incon">
                            <div class="s-elements-grid valign-top xs-wrap" style="margin-left: -10px; margin-right: -10px;">
                                <div class="s-elements-grid__cell">
                                    <div class="s-elements-grid__cellwrapper" style="padding-top: 10px; padding-bottom: 10px; padding-right: 10px;">
                                        <div class="cont cell">
                                            <div class="node node369 widget widget-element">
                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 5px; border-width: 2px; border-style: solid; border-color: rgb(45, 106, 161);">
                                                    <div class="wrapper2" style="padding: 41px 10px; border-radius: 3px;">
                                                        <div class="cont">
                                                            <div class="node node370 widget widget-image">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 5px;">
                                                                        <div class="xs-force-center" style="text-align: center;">
                                                                            <div class="svgwrap"><img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 128px;">
                                                                                <svg class="svgicon" id="svg370" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                                                                    <rect x="1.92" y="1.92" width="124.16" height="124.16" style="stroke: rgb(45, 106, 161); fill: none; stroke-alignment: inside; stroke-width: 3.84" rx="62.08" ry="62.08"></rect>
                                                                                    <g transform="scale(0.5) translate(64, 64)">
                                                                                        <path class="st0" d="M118.582,35.55c-0.729-1.901-2.123-3.945-3.93-5.758c-2.777-2.776-6.045-4.502-8.528-4.502 c-1.544,0-2.5,0.63-3.032,1.16l-2.878,2.879L59.312,70.24c-0.009,0.009-0.015,0.02-0.023,0.028 c-0.027,0.029-0.05,0.062-0.075,0.093c-0.082,0.095-0.153,0.194-0.214,0.3c-0.023,0.041-0.045,0.082-0.065,0.124 c-0.059,0.121-0.105,0.245-0.138,0.374c-0.006,0.022-0.019,0.041-0.023,0.063l-2.448,11.073c0,0.001,0,0.002,0,0.003l-0.985,4.421 c-0.148,0.667,0.054,1.364,0.537,1.849c0.38,0.379,0.891,0.586,1.415,0.586c0.145,0,0.289-0.016,0.434-0.048l4.42-0.981h0.004 l11.079-2.448c0.022-0.005,0.041-0.018,0.062-0.023c0.129-0.032,0.254-0.079,0.375-0.138c0.042-0.021,0.083-0.041,0.123-0.064 c0.106-0.062,0.207-0.135,0.304-0.217c0.029-0.025,0.061-0.046,0.088-0.072c0.01-0.009,0.021-0.016,0.03-0.024l40.9-40.905h0.001 v-0.001l2.876-2.88C118.749,40.593,119.838,38.831,118.582,35.55z M105.863,29.323c0,0,0.073-0.032,0.261-0.032 c1.141,0,3.411,1.043,5.698,3.329c2.884,2.893,3.528,5.433,3.339,5.902l-1.465,1.467l-9.244-9.249L105.863,29.323z M62.358,83.982 l-1.891-1.893l1.424-6.442l6.911,6.91L62.358,83.982z"></path>
                                                                                        <path class="st0" d="M96.381,69.748c-1.657,0-3,1.343-3,3v39.821H14.844V15.43h78.537v6.758c0,1.657,1.343,3,3,3s3-1.343,3-3V12.43 c0-1.656-1.343-3-3-3H11.844c-1.657,0-3,1.344-3,3v103.139c0,1.657,1.343,3,3,3h84.537c1.657,0,3-1.343,3-3V72.748 C99.381,71.09,98.038,69.748,96.381,69.748z"></path>
                                                                                        <path class="st0" d="M76.843,40.277c0-1.104-0.896-2-2-2H31.109c-1.104,0-2,0.896-2,2s0.896,2,2,2h43.733 C75.947,42.277,76.843,41.381,76.843,40.277z"></path>
                                                                                        <path class="st0" d="M55.343,62.277c0-1.104-0.896-2-2-2H31.109c-1.104,0-2,0.896-2,2s0.896,2,2,2h22.233 C54.447,64.277,55.343,63.381,55.343,62.277z"></path>
                                                                                        <path class="st0" d="M31.109,81.777c-1.104,0-2,0.896-2,2s0.896,2,2,2h11.733c1.104,0,2-0.896,2-2s-0.896-2-2-2H31.109z"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <noscript>&lt;img src="//s.platformalp.ru/img/icons-simple-solid/116--black.png" alt=""&gt;</noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="node node371 widget widget-text">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 10px 5px;">
                                                                        <h4 class="spans xs-force-center textable"><span class="p" style="text-align: center; font-size: 18px;"><strong><?php the_field('title1'); ?></strong></span></h4></div>
                                                                </div>
                                                            </div>
                                                            <div class="node node372 widget widget-text">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 5px;">
                                                                        <div class="textable">
                                                                        <?php if( have_rows('1st_plan') ): while ( have_rows('1st_plan') ) : the_row(); ?>
                                                                            <ul>
                                                                                <li><?php the_sub_field('1st_descr'); ?></li>
                                                                            </ul>
                                                                            <?php  endwhile; endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-elements-grid__cell">
                                    <div class="s-elements-grid__cellwrapper" style="padding: 10px;">
                                        <div class="cont cell">
                                            <div class="node node373 widget widget-element">
                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 5px; border-width: 2px; border-style: solid; border-color: rgb(45, 106, 161);">
                                                    <div class="wrapper2" style="padding: 41px 10px; border-radius: 3px;">
                                                        <div class="cont">
                                                            <div class="node node374 widget widget-image">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 5px;">
                                                                        <div class="xs-force-center" style="text-align: center;">
                                                                            <div class="svgwrap"><img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 128px;">
                                                                                <svg class="svgicon" id="svg374" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                                                                    <rect x="1.92" y="1.92" width="124.16" height="124.16" style="stroke: rgb(45, 106, 161); fill: none; stroke-alignment: inside; stroke-width: 3.84" rx="62.08" ry="62.08"></rect>
                                                                                    <g transform="scale(0.5) translate(64, 64)">
                                                                                        <path d="M82.938,28.35c-6.729,0.137-13.284,2.883-18.872,7.421l1.005-14.45c0.046-0.229,0.068-0.46,0.05-0.691l0.011-0.172 c0,0-0.021-0.026-0.054-0.064c-0.909-5.251-17.21-10.557-17.21-10.557c-1.251,2.015-0.112,6.477,3.207,9.646 c-4.12,1.282-7.604,2.82-7.604,2.82c0.492,2.771,5.786,5.88,11.462,4.863c2.861-0.512,5.347-1.548,7.044-2.804 c0.705,3.954,0.731,8.188,0.577,11.449c-5.688-4.169-12.22-6.558-18.823-6.423c-18.5,0.363-36.95,18.493-29.039,46.26 c7.119,24.982,18.354,41.259,36.849,40.895c3.599-0.071,7.865-0.655,10.787-1.502l-0.609,2.57l2.633-1.446l1.438,2l1.228-2.058 l2.425,0.714l-1.146-1.878c2.896,0.65,6.816,0.878,10.277,0.811c18.494-0.366,29.081-17.076,35.213-42.323 C120.588,45.376,101.435,27.983,82.938,28.35z M102.34,62.281c-5.694-16.625-22.812-22.694-22.812-22.694 C109.275,32.443,102.34,62.281,102.34,62.281z"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <noscript>&lt;img src="//s.platformalp.ru/img/icons-simple-solid/122--black.png" alt=""&gt;</noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="node node375 widget widget-text">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 10px 5px;">
                                                                        <h4 class="spans xs-force-center textable"><span class="p" style="text-align: center; font-size: 18px;"><strong><?php the_field('title2'); ?></strong></span></h4></div>
                                                                </div>
                                                            </div>
                                                            <div class="node node376 widget widget-text">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 5px;">
                                                                        <div class="textable">
                                                                            <?php if( have_rows('2nd_plan') ): while ( have_rows('2nd_plan') ) : the_row(); ?>
                                                                            <ul>
                                                                                <li><?php the_sub_field('2nd_descr'); ?></li>
                                                                            </ul>
                                                                            <?php  endwhile; endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-elements-grid__cell">
                                    <div class="s-elements-grid__cellwrapper" style="padding-top: 10px; padding-bottom: 10px; padding-left: 10px;">
                                        <div class="cont cell">
                                            <div class="node node377 widget widget-element">
                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 5px; border-width: 2px; border-style: solid; border-color: rgb(45, 106, 161);">
                                                    <div class="wrapper2" style="padding: 41px 10px; border-radius: 3px;">
                                                        <div class="cont">
                                                            <div class="node node378 widget widget-image">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 5px;">
                                                                        <div class="xs-force-center" style="text-align: center;">
                                                                            <div class="svgwrap"><img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 128px;">
                                                                                <svg class="svgicon" id="svg378" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                                                                    <rect x="1.92" y="1.92" width="124.16" height="124.16" style="stroke: rgb(45, 106, 161); fill: none; stroke-alignment: inside; stroke-width: 3.84" rx="62.08" ry="62.08"></rect>
                                                                                    <g transform="scale(0.5) translate(64, 64)">
                                                                                        <path d="M77.191,103.794H26.466V26.276h50.725v7.462h3.964V19.671c0-7.166-3.645-10.812-10.811-10.812h-36.76 c-7.166,0-10.814,3.646-10.814,10.812v88.656c0,7.166,3.648,10.812,10.814,10.812h36.76c7.166,0,10.811-3.646,10.811-10.812V76.572 h-3.964V103.794z M42.07,15.34h19.793c1.233,0,2.232,0.999,2.232,2.232c0,1.235-0.999,2.237-2.232,2.237H42.07 c-1.234,0-2.239-1.002-2.239-2.237C39.831,16.339,40.836,15.34,42.07,15.34z"></path>
                                                                                        <path d="M99.779,37.266H81.155h-3.964H58.457c-3.009,0-5.45,2.439-5.45,5.45v24.067c0,3.008,2.44,5.448,5.45,5.448h1.163 l3.072,4.341l2.121,2.995c0.426,0.426,1.119,0.426,1.547,0l2.12-2.995l3.07-4.341h5.642h3.964h18.624c3.008,0,5.45-2.44,5.45-5.448 V42.716C105.229,39.705,102.788,37.266,99.779,37.266z M95.092,63.444H81.155h-3.964H65.595c-0.994,0-1.8-0.806-1.8-1.799 c0-0.994,0.806-1.798,1.8-1.798h11.596h3.964h13.937c0.995,0,1.798,0.804,1.798,1.798C96.89,62.638,96.086,63.444,95.092,63.444z M95.092,56.25H81.155h-3.964H65.595c-0.994,0-1.8-0.806-1.8-1.799c0-0.994,0.806-1.799,1.8-1.799h11.596h3.964h13.937 c0.995,0,1.798,0.806,1.798,1.799C96.89,55.444,96.086,56.25,95.092,56.25z M95.092,49.054H81.155h-3.964H65.595 c-0.994,0-1.8-0.804-1.8-1.798c0-0.994,0.806-1.799,1.8-1.799h11.596h3.964h13.937c0.995,0,1.798,0.805,1.798,1.799 C96.89,48.25,96.086,49.054,95.092,49.054z"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <noscript>&lt;img src="//s.platformalp.ru/img/icons-simple-solid/96--black.png" alt=""&gt;</noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="node node379 widget widget-text">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 10px 5px;">
                                                                        <h4 class="spans xs-force-center textable"><span class="p" style="text-align: center; font-size: 18px;"><strong><?php the_field('title3'); ?></strong></span></h4></div>
                                                                </div>
                                                            </div>
                                                            <div class="node node380 widget widget-text">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 5px;">
                                                                        <div class="textable">
                                                                            <?php if( have_rows('3rd_plan') ): while ( have_rows('3rd_plan') ) : the_row(); ?>
                                                                            <ul>
                                                                                <li><?php the_sub_field('3rd_desc'); ?></li>
                                                                            </ul>
                                                                            <?php  endwhile; endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cont"></div>
                    </div><span class="plplink"></span>
                    <div class="container noanimate" style="height: 20px;"></div>
                </div>
            </div>
        </div>
        <!-- END OF 2nd BLOCK -->
        <div class="node node491 section section-clear">
    <style>
    .node491 a {
        color: rgb(25, 133, 230);
    }
    </style>
    <div class="wrapper1" style="color: rgb(51, 51, 51);">
        <div class="wrapper2">
            <div class="container noanimate" style="height: 30px;"></div>
            <div class="container">
                <div class="cont"></div>
            </div>
            <div class="container header-simple">
                <h2 class="font-header spans title textable gray-theme"><span class="p" style="font-size: 200%;">
                  <span style="font-family: &quot;Open Sans&quot;;"><strong><?php the_field('video_title'); ?></strong></span></span>
                </h2>
                <div class="spans subtitle textable gray-theme"><span class="p" style="font-size: 110%;"><?php the_field('video_undertitle'); ?></span></div>
            </div>
            <div class="container">
                <div class="cont">
                    <div class="node node492 widget widget-video" outline="0">
                        <style>
                        .node492 a {
                            color: rgb(25, 133, 230);
                        }
                        </style>
                        <div class="wrapper1" style="color: rgb(51, 51, 51); border-radius: 0px;">
                            <div class="wrapper2" style="padding: 5px;">
                                <div class="macros-video">
                                    <div class="pad-in">
                                      <div id="owl-demo-2" class="owl-second-carousel owl-theme">
                                        <?php if( have_rows('video') ): while ( have_rows('video') ) : the_row(); ?>
                                        <div class="item">
                                          <iframe width="640" height="360" src="https://www.youtube.com/embed/<?php the_sub_field('video_item'); ?>" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                        <?php endwhile; endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><span class="plplink"></span>
            <div class="container noanimate" style="height: 30px;"></div>
        </div>
    </div>
</div>


<div class="node node493 section section-slider">
    <style>
    .node493 a {
        color: rgb(25, 137, 230);
    }
    </style>
    <div class="wrapper1" style="color: rgb(255, 255, 255); background-color: rgb(5, 11, 16);">
        <div class="wrapper2">
            <div class="container noanimate" style="height: 20px;"></div>
            <div class="container header-simple">
                <h2 class="font-header spans title textable gray-theme">
                  <span class="p" style="font-size: 200%;"><strong><?php the_field('results_title'); ?></strong></span>
                </h2>
                <div class="spans subtitle textable gray-theme"><span class="p" style="font-size: 110%;"><?php the_field('results_undertitle'); ?></span></div>
            </div>
            <div class="container">
                <div class="incon" data-red-libs="bxslider">
                    <div class="wrap">
                        <div class="bx-wrapper" style="max-width: 100%;">

                          <div id="owl-demo" class="owl-carousel owl-theme">
                                <?php if( have_rows('results_slider') ): while ( have_rows('results_slider') ) : the_row();
                                // vars
                                $image = get_sub_field('res_img');?>
                            <div class="item">
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            </div>
                                <?php endwhile; endif; ?>
                          </div>
                        </div>
                    </div>
                </div>
            </div><span class="plplink"></span>
            <div class="container noanimate" style="height: 20px;"></div>
        </div>
    </div>
</div>





        <!-- 3rd BLOCK -->
        <div class="node node381 section section-elements" id="id2">
            <div class="wrapper1" style="color: rgb(51, 51, 51);">
                <div class="wrapper2">
                    <div class="container noanimate" style="height: 20px;"></div>
                    <div class="container">
                        <div class="cont"></div>
                    </div>
                    <div class="container header-simple">
                        <h2 class="font-header spans title textable"><span class="p" style="font-size: 200%;"><strong><?php the_field('3rd_title'); ?></strong></span></h2>
                        <div class="spans subtitle textable"><span class="p" style="font-size: 110%;"><?php the_field('3rd_undertitle'); ?></span></div>
                    </div>
                    <div class="container">
                        <div class="cont"></div>
                        <div class="s-elements-wrapper incon">
                            <div class="s-elements-grid valign-top xs-wrap" style="margin-left: -10px; margin-right: -10px;">
                            <?php
                            if( have_rows('order') ):
                                while ( have_rows('order') ) : the_row(); ?>
                                <div class="s-elements-grid__cell">
                                    <div class="s-elements-grid__cellwrapper" style="padding-top: 10px; padding-bottom: 10px; padding-right: 10px;">
                                        <div class="cont cell">
                                            <div class="node node382 widget widget-element">
                                                <div class="wrapper1" style="color: rgb(51, 51, 51); border-radius: 5px; border-width: 2px; border-style: solid; border-color: rgb(45, 106, 161);">
                                                    <div class="wrapper2" style="padding: 5px; border-radius: 3px;">
                                                        <div class="cont">
                                                            <div class="node node383 widget widget-text">
                                                                <div class="wrapper1" style="color: rgb(51, 51, 51); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 5px;">
                                                                        <div class="xs-force-center textable">
                                                                            <p style="text-align: center;"><span style="font-size: 36px; font-family: &quot;Roboto Slab&quot;, serif;"><?php the_sub_field('order_title'); ?></span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="node node384 widget widget-button">
                                                                <div class="wrapper1" style="color: rgb(51, 51, 51); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 15px 5px;">
                                                                        <div class="macros-button">
                                                                            <div class="btn-out center xs-none">
                                                                                <div class="btn-inner">
                                                                                  <button class="btn font-text" id="uid163" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" data-modal="form">
                                                                                    <span class="text">Оставить заявку</span>
                                                                                  </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="macros-modal">
                                                                            <div class="modal fade nocolors" data-modal="form" area-context="uid163">
                                                                                <div class="modal-dialog" style="width: 400px;">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <button class="close">×</button>
                                                                                            <h4 class="textable"><p><strong>Заявка</strong></p></h4></div>
                                                                                        <div class="modal-body">
                                                                                            <div class="macros-form">
                                                                                                <div class="outer">
                                                                                                    <div class="inner">
                                                                                                        <div class="vertical none size-default">
                                                                                                            <div class="body">
                                                                                                                <div class="cont"></div>
                                                                                <?php echo do_shortcode('[contact-form-7 id="76" title="order form"]'); ?>
                                                                                                                <div class="cont"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- modal -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- s-elements-grid__cell -->
                               <?php endwhile; endif; ?>
                        </div><!-- s-elements-grid valign-top xs-wrap -->
                        <div class="cont"></div>
                    </div><span class="plplink"></span>
                    <div class="container noanimate" style="height: 20px;"></div>
                </div>
            </div>
        </div>
        <!-- END OF 3rd BLOCK -->

        <!-- 4th BLOCK -->
        <div class="node node391 section section-elements" id="about">
            <div class="wrapper1" style="background-position: center center; background-repeat: repeat; background-size: auto; color: rgb(255, 255, 255); background-image: url(&quot;//s.platformalp.ru/img/bg-patterns-light/12.png&quot;);">
                <div class="wrapper2" style="background-color: rgb(4, 8, 13);">
                    <div class="container noanimate" style="height: 20px;"></div>
                    <div class="container">
                        <div class="cont"></div>
                    </div>
                    <div class="container header-simple">
                        <h2 class="font-header spans title textable">
                          <span class="p" style="font-size: 200%;">
                            <strong><span style="font-family: &quot;Roboto Slab&quot;, serif; font-size: 32px;"><?php the_field('4th_title'); ?></span></strong>
                          </span>
                        </h2>
                        <div class="spans subtitle textable">
                          <span class="p" style="font-size: 110%;"><?php the_field('4th_undertitle'); ?></span>
                        </div>
                    </div>
                    <div class="container">
                        <div class="cont"></div>
                        <div class="s-elements-wrapper incon">
                            <div class="s-elements-grid valign-middle xs-wrap fourth-block">
                            <?php
                            if( have_rows('our_advantage') ):
                                while ( have_rows('our_advantage') ) : the_row();
                                // vars
                                $image = get_sub_field('adv_img'); ?>
                                <div class="s-elements-grid__cell">
                                    <div class="s-elements-grid__cellwrapper" style="padding-top: 10px; padding-bottom: 10px; padding-right: 10px;">
                                        <div class="cont cell">
                                            <div class="node node392 widget widget-element wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 5px; border-width: 2px; border-style: solid; border-color: rgb(45, 106, 161);">
                                                    <div class="wrapper2" style="padding: 5px; border-radius: 3px;">
                                                        <div class="cont">
                                                            <div class="node node393 widget widget-imagedtext">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 5px;">
                                                                        <div class="tbl middle">
                                                                            <div class="td icon" style="width: 50px;">
                                                                                <div class="wrap">
                                                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="td text">
                                                                                <div style="padding-left: 10px;">
                                                                                    <div class="cont"></div>
                                                                                    <div class="textable" style="margin-top: 0px;">
                                                                                        <p style="font-size: 110%;">
                                                                                        <span style="font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(255, 255, 255);">
                                                                                        <?php the_sub_field('adv_text'); ?></span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="cont"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                            </div><!-- s-elements-grid valign-middle xs-wrap -->
                        </div>
                        <div class="cont"></div>
                    </div><span class="plplink"></span>
                    <div class="container noanimate" style="height: 20px;"></div>
                </div>
            </div>
        </div>
        <!-- END OF 4th BLOCK -->

        <!-- 5th BLOCK -->
        <div class="node node404 section section-elements" id="id5">
            <div class="wrapper1" style="color: rgb(51, 51, 51);">
                <div class="wrapper2">
                    <div class="container noanimate" style="height: 20px;"></div>
                    <div class="container">
                        <div class="cont"></div>
                    </div>
                    <div class="container header-simple">
                        <h2 class="font-header spans title textable">
                          <span class="p" style="font-size: 200%;"><strong><?php the_field('5th_title'); ?></strong></span>
                        </h2>
                        <div class="spans subtitle textable">
                          <span class="p" style="font-size: 110%;"><?php the_field('5th_undertitle'); ?></span>
                        </div>
                    </div>
                    <div class="container">
                        <div class="cont"></div>
                        <div class="s-elements-wrapper incon">
                            <div class="s-elements-grid valign-top xs-wrap" style="margin-left: -10px; margin-right: -10px;">
                              <?php
                            if( have_rows('stuff') ):
                                while ( have_rows('stuff') ) : the_row();
                                // vars
                                $image = get_sub_field('stuff_img'); ?>
                                <div class="s-elements-grid__cell" style="width: 25%; padding-left: 10px;">
                                    <div class="s-elements-grid__cellwrapper" style="padding-top: 10px; padding-bottom: 10px; padding-right: 10px;">
                                        <div class="cont cell">
                                            <div class="node node405 widget widget-element">
                                                <div class="wrapper1" style="color: rgb(51, 51, 51); border-radius: 5px; border-width: 2px; border-style: solid; border-color: rgb(45, 106, 161);">

                                                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                                                                        <div class="stuff-descr">
                                                                          <h4 class="spans xs-force-center textable">
                                                                            <span class="p" style="text-align: center; font-size: 18px;">
                                                                              <strong><?php the_sub_field('stuff_name'); ?></strong>
                                                                            </span>
                                                                          </h4>
                                                                            <p style="text-align: center;"><?php the_sub_field('stuff_desc'); ?></p>
                                                                        </div><!-- stuff-descr -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                        <div class="cont"></div>
                    </div><span class="plplink"></span>
                    <div class="container noanimate" style="height: 20px;"></div>
                </div>
            </div>
        </div>
        <!-- END OF 5th BLOCK -->


        <div class="node node417 section section-elements" id="id3">
            <div class="wrapper1" style="background-color: rgb(5, 11, 16); color: rgb(255, 255, 255);">
                <div class="wrapper2">
                    <div class="container noanimate" style="height: 30px;"></div>
                    <div class="container">
                        <div class="cont"></div>
                    </div>
                    <div class="container header-simple">
                        <h2 class="font-header spans title textable">
                          <span class="p" style="font-size: 200%;"><strong><?php the_field('6th_title'); ?></strong></span>
                        </h2>
                        <div class="spans subtitle textable"><span class="p" style="font-size: 110%;"><?php the_field('6th_title'); ?></span></div>
                    </div>
                    <div class="container">
                        <div class="cont"></div>
                        <div class="s-elements-wrapper incon">
                            <div class="s-elements-grid valign-top xs-wrap" style="margin-left: -10px; margin-right: -10px;">
                            <?php
                            if( have_rows('join_block') ) {

                              $i = 0;

                                while ( have_rows('join_block') ) : the_row(); ?>
                                <div class="s-elements-grid__cell" style="width: 100%; padding-left: 10px; padding-right: 10px;">
                                    <div class="s-elements-grid__cellwrapper" style="padding-top: 10px; padding-bottom: 10px;">
                                        <div class="cont cell">
                                            <div class="node node418 widget widget-element">
                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                    <div class="wrapper2" style="padding: 5px;">
                                                        <div class="cont">
                                                            <div class="node node419 widget widget-grid">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 5px;">
                                                                        <div class="grid valign-top paddings-20px xs-wrap">
                                                                            <div class="gridwrap">

                                                                              <?php if (($i == 1) || ($i == 3) || ($i == 5)) { ?>
                                                                                <div class="col" style="width: 33.4541%;"><div class="cont"></div></div>
                                                                              <?php } ?>

                                                                              <?php if (($i == 1) || ($i == 3) || ($i == 5)) {
                                                                                $class = 'bounceInRight';
                                                                              } else {
                                                                                $class = 'bounceInLeft';
                                                                              } ?>

                                                                                <div class="col" style="width: 66.5459%;">
                                                                                    <div class="cont">
                                                                                        <div class="node node420 widget widget-grid wow <?php echo $class; ?>">
                                                                                            <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 10px; border-width: 2px; border-style: solid; border-color: rgb(45, 106, 161);">
                                                                                                <div class="wrapper2" style="padding: 20px 10px; border-radius: 8px;">
                                                                                                    <div class="grid valign-middle paddings-20px xs-wrap">
                                                                                                        <div class="gridwrap">
                                                                                                            <div class="col" style="width: 14.9804%;">
                                                                                                                <div class="cont">
                                                                                                                    <div class="node node421 widget widget-text">
                                                                                                                        <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                                                                            <div class="wrapper2" style="padding: 5px;">
                                                                                                                                <div class="xs-force-center textable">
                                                                                                                                    <p style="line-height: 1; text-align: center;"><span style="font-size: 56px; color: rgb(255, 255, 255);">
                                                                                                                        <strong>
                                                                                                                          <span style="font-family: &quot;Uni Sans&quot;, impact;">

                                                                                                                        <?php the_sub_field('number_block'); ?>
                                                                                                                            </span>
                                                                                                                          </strong>
                                                                                                                                        </span>
                                                                                                                                    </p>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col" style="width: 85.0196%;">
                                                                                                                <div></div>
                                                                                                                <div class="cont">
                                                                                                                    <div class="node node422 widget widget-text">
                                                                                                                        <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                                                                            <div class="wrapper2" style="padding: 5px;">
                                                                                                                                <div class="xs-force-center textable">
                                                                                                                                    <p><span style="font-size: 24px;">
                                                                                                                        <?php the_sub_field('join_desc'); ?>
                                                                                                                        </span></p>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


<?php if (($i == 0) || ($i == 2) || ($i == 4)) { ?>
  <div class="col" style="width: 33.4541%;"><div></div><div class="cont"></div></div>
<?php } ?>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $i++;

                                endwhile;
                                } ?>
                            </div>
                        </div>
                        <div class="cont"></div>
                    </div><span class="plplink"></span>
                    <div class="container noanimate" style="height: 30px;"></div>
                </div>
            </div>
        </div>



        <div class="node node438 section section-clear">
            <div class="separatortop">
                <div class="bigtriangle-bottom" style="height: 23px;">
                    <svg version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M 46.5 0 L 50 100 L 53.5 0 Z" style="fill: rgb(5, 11, 16);"></path>
                    </svg>
                </div>
            </div>
            <div class="wrapper1" style="color: rgb(51, 51, 51);">
                <div class="wrapper2" style="padding-top: 23px;">
                    <div class="container noanimate" style="height: 20px;"></div>
                    <div class="container">
                        <div class="cont"></div>
                    </div>
                    <div class="container header-simple">
                        <h2 class="font-header spans title textable"><span class="p" style="font-size: 200%;"><strong><?php the_field('7th_title'); ?></strong></span></h2>
                        <div class="spans subtitle textable"><span class="p" style="font-size: 110%;"><?php the_field('7th_undertitle'); ?></span></div>
                    </div>
                    <div class="container">
                        <div class="cont">
                            <div class="node node439 widget widget-form">
                                <div class="wrapper1" style="color: rgb(51, 51, 51); border-radius: 0px;">
                                    <div class="wrapper2" style="padding: 5px;">
                                        <div class="macros-form">
                                            <div class="outer" style="max-width: 300px;">
                                                <div class="inner">
                                                    <div class="vertical none size-default">
                                                        <div class="body">
                                                            <div class="cont"></div>
                                                            <?php echo do_shortcode('[contact-form-7 id="112" title="Без названия"]'); ?>
                                                            <div class="cont">
                                                                <div class="node node440 widget widget-text">
                                                                    <div class="wrapper1" style="color: rgb(51, 51, 51); border-radius: 0px;">
                                                                        <div class="wrapper2" style="padding: 5px;">
                                                                            <div class="xs-force-center textable">
                                                                                <p style="line-height: 1; text-align: center;"><span style="color: rgb(160, 160, 160);"><span style="font-size: 12px; font-family: arial, helvetica, sans-serif;">Внимание! Все ваши данные конфиденциальны. Мы не передаем ваши данные третьим лицам и не рассылаем спам.</span></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><span class="plplink"></span>
                    <div class="container noanimate" style="height: 20px;"></div>
                </div>
            </div>
        </div>


        <div class="node node441 section section-elements" id="id4">
            <div class="wrapper1" style="background-color: rgb(5, 11, 16); color: rgb(255, 255, 255);">
                <div class="wrapper2">
                    <div class="container noanimate" style="height: 20px;"></div>
                    <div class="container">
                        <div class="cont"></div>
                    </div>
                    <div class="container header-simple">
                        <h2 class="font-header spans title textable"><span class="p" style="font-size: 200%;"><?php the_field('8th_title'); ?></span></h2>
                        <div class="spans subtitle textable"><span class="p" style="font-size: 110%;"><?php the_field('8th_undertitle'); ?></span></div>
                    </div>
                    <div class="container">
                        <div class="cont"></div>
                        <div class="s-elements-wrapper incon">
                            <div class="s-elements-grid valign-top xs-wrap" style="margin-left: -10px; margin-right: -10px;">
                                <?php
                            if( have_rows('qustion_block') ):
                                while ( have_rows('qustion_block') ) : the_row();
                                // vars
                                $image = get_sub_field('question_img'); ?>
                                <div class="s-elements-grid__cell">
                                    <div class="s-elements-grid__cellwrapper" style="padding-top: 20px; padding-bottom: 20px; padding-right: 10px;">
                                        <div class="cont cell">
                                            <div class="node node442 widget widget-element">
                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                    <div class="wrapper2" style="padding: 5px;">
                                                        <div class="cont">
                                                            <div class="node node443 widget widget-imagedtext">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                    <div class="wrapper2" style="padding: 5px;">
                                                                        <div class="tbl middle">
                                                                            <div class="td icon" style="width: 32px;">
                                                                                <div class="wrap">
                                                                                    <div>
                                                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                                                                        <svg class="svgicon" id="svg443" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                                                                            <path class="st0" d="M64,2.688C30.192,2.688,2.688,30.192,2.688,64c0,33.808,27.504,61.312,61.312,61.312S125.312,97.807,125.312,64 C125.312,30.192,97.808,2.688,64,2.688z M64.042,99.272c-1.921,0-3.623-0.632-5.059-1.879c-1.478-1.28-2.227-3.071-2.227-5.323 c0-2.008,0.714-3.723,2.12-5.098c1.401-1.369,3.139-2.062,5.165-2.062c2.003,0,3.715,0.696,5.09,2.07 c1.374,1.375,2.07,3.087,2.07,5.09c0,2.22-0.739,4.001-2.196,5.296C67.583,98.63,65.913,99.272,64.042,99.272z M84.664,58.806 c-0.993,1.844-2.194,3.461-3.57,4.809c-1.31,1.282-3.692,3.47-7.082,6.501c-0.895,0.815-1.626,1.546-2.168,2.167 c-0.509,0.584-0.888,1.114-1.124,1.575c-0.244,0.479-0.436,0.959-0.567,1.428c-0.145,0.51-0.363,1.419-0.67,2.781 c-0.604,3.31-2.646,5.08-5.896,5.08c-1.693,0-3.144-0.566-4.31-1.685c-1.179-1.127-1.776-2.775-1.776-4.897 c0-2.438,0.389-4.594,1.154-6.405c0.758-1.794,1.781-3.394,3.04-4.755c1.206-1.305,2.845-2.866,4.871-4.642 c1.75-1.531,3.02-2.691,3.775-3.449c0.718-0.716,1.329-1.524,1.818-2.404c0.458-0.821,0.681-1.69,0.681-2.656 c0-1.931-0.699-3.517-2.139-4.848c-1.463-1.351-3.316-2.008-5.668-2.008c-2.73,0-4.739,0.666-5.969,1.979 c-1.327,1.417-2.478,3.567-3.42,6.393c-1.33,4.421-4.15,5.356-6.281,5.356c-1.817,0-3.373-0.651-4.624-1.936 c-1.244-1.276-1.876-2.701-1.876-4.233c0-2.797,0.9-5.653,2.675-8.489c1.764-2.821,4.363-5.184,7.728-7.024 c3.36-1.837,7.319-2.769,11.768-2.769c4.128,0,7.836,0.778,11.019,2.312c3.209,1.546,5.729,3.688,7.492,6.367 c1.77,2.691,2.666,5.658,2.666,8.819C86.211,54.67,85.69,56.904,84.664,58.806z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="td text">
                                                                                <div style="padding-left: 10px;">
                                                                                    <div class="cont"></div>
                                                                                    <h2 class="textable" style="margin-bottom: 0px;"><p style="font-size: 150%;"><span style="color: rgb(255, 255, 255);"><strong>
                                                                                    <?php the_sub_field('question_title'); ?></strong></span></p></h2>
                                                                                    <div class="cont"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="node node444 widget widget-element">
                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 10px; border-width: 2px; border-style: solid; border-color: rgb(45, 106, 161);">
                                                                    <div class="wrapper2" style="padding: 5px; border-radius: 8px;">
                                                                        <div class="cont">
                                                                            <div class="node node445 widget widget-text">
                                                                                <div class="wrapper1" style="color: rgb(255, 255, 255); border-radius: 0px;">
                                                                                    <div class="wrapper2" style="padding: 5px;">
                                                                                        <div class="xs-force-center textable">
                                                                                            <p><?php the_sub_field('question_desc'); ?></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <?php endwhile; endif; ?>
                            </div>
                        </div>
                        <div class="cont"></div>
                    </div><span class="plplink"></span>
                    <div class="container noanimate" style="height: 20px;"></div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>
