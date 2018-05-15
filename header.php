<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<?php wp_head(); ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div id="navbarResponsive" class="collapse navbar-collapse">
        
            <div class="navbar-sidenav">
                <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'navbar-left',
                        'container'         => false,
                        'fallback_cb'       => false,
                        'menu_class'        => 'navbar-nav sidenav',
                        'menu_id'           => ''
                    ));
                ?>
            
            </div>
            
            <div class="navbar-topnav">
            
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item nav-search">
                        <?php get_search_form(); ?>
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'navbar-top',
                            'container'         => false,
                            'fallback_cb'       => false,
                            'menu_class'        => false,
                            'menu_id'           => false,
                            'items_wrap'        => '%3$s'
                        ));
                    ?>
                    
                    <li class="nav-item dropdown ml-lg-2">
                        <a class="nav-link dropdown-toggle" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-envelope-o"></i>
                            <span class="d-lg-none">Messages
                                <span class="badge badge-pill badge-primary">12</span>
                            </span>
                            <span class="indicator text-primary d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">New Messages:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>David Miller</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>Jane Smith</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>John Doe</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">View all messages</a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown ml-lg-2">
                        <a class="nav-link dropdown-toggle" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell-o"></i>
                            <span class="d-lg-none">Alerts
                                <span class="badge badge-pill badge-warning">6</span>
                            </span>
                            <span class="indicator text-warning d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">New Alerts:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update
                                    </strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-danger">
                                    <strong>
                                        <i class="fa fa-long-arrow-down fa-fw"></i>Status Update
                                    </strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update
                                    </strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">View all alerts</a>
                        </div>
                    </li>
                    
                    <?php if(is_user_logged_in()){ ?>
                    
                        <li class="nav-item dropdown ml-lg-2">
                            <a class="nav-link nav-account" id="accountDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo get_avatar_url(get_current_user_id()); ?>" class="rounded-circle" />
                                <span class="d-lg-none">Account</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
                                <div class="text-center">
                                    <?php $userdata = get_userdata(get_current_user_id()); ?>
                                    <a href="<?php echo get_author_posts_url(get_current_user_id()); ?>">
                                        <strong><?php echo $userdata->first_name; ?> <?php echo $userdata->last_name; ?></strong>
                                    </a>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo get_author_posts_url(get_current_user_id()); ?>">
                                    <i class="fa fa-fw fa-user"></i> <?php _e('My profile'); ?>
                                </a>
                                <a class="dropdown-item" href="<?php echo wp_logout_url(); ?>">
                                    <i class="fa fa-fw fa-power-off"></i> <?php _e('Logout'); ?>
                                </a>
                            </div>
                        </li>
                    <?php }else{ ?>
                        <li class="nav-item dropdown ml-lg-2">
                            <a class="nav-link nav-login btn btn-primary text-white" id="signinDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php _e('Sign in'); ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="signinDropdown">
                                <form class="px-3 py-2" method="post" action="<?php echo wp_login_url(); ?>">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1"><?php _e('E-mail address'); ?></label>
                                        <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Login" name="log" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormPassword1"><?php _e('Password'); ?></label>
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="pwd" />
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" name="rememberme" value="forever" class="form-check-input" id="dropdownCheck">
                                        <label class="form-check-label" for="dropdownCheck"><?php _e('Remember me'); ?></label>
                                    </div>
                                    <input type="hidden" name="redirect_to" value="<?php echo esc_url('//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>">
                                    <button type="submit" class="btn btn-secondary"><?php _e('Sign in'); ?></button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo wp_registration_url(); ?>"><?php _e('New around here? Sign up'); ?></a>
                                <a class="dropdown-item" href="<?php echo wp_lostpassword_url(esc_url('//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'])); ?>"><?php _e('Forgot password?'); ?></a>
                            </div>
                        </li>
                        <?php if(get_option('users_can_register')){ ?>
                            <li class="nav-item ml-lg-2">
                                <a class="nav-link nav-login btn btn-secondary text-white" href="<?php echo wp_registration_url(); ?>">
                                    <?php _e('Sign up'); ?>
                                </a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="content-wrapper">