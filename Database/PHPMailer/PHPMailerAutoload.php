




<!DOCTYPE html>
<html class="   ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>PHPMailer/PHPMailerAutoload.php at master · Synchro/PHPMailer · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="Synchro/PHPMailer" name="twitter:title" /><meta content="PHPMailer - The classic email sending library for PHP - this is my personal fork, please post issues on the upstream project" name="twitter:description" /><meta content="https://avatars1.githubusercontent.com/u/81561?s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars1.githubusercontent.com/u/81561?s=400" property="og:image" /><meta content="Synchro/PHPMailer" property="og:title" /><meta content="https://github.com/Synchro/PHPMailer" property="og:url" /><meta content="PHPMailer - The classic email sending library for PHP - this is my personal fork, please post issues on the upstream project" property="og:description" />

    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    

    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="43AB603B:1EF9:23E1740:538EF571" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico" />


    <meta content="authenticity_token" name="csrf-param" />
<meta content="qLc64RTQNBFDO+mOEu0pKCJ+GcuLfQwfhrc2nkUNsILFKKygi6XfBwZ9AjOgCXNBKfmKch4/knMkEYH9AecdVg==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-3fbc8ed7662a68f636e9db2134408ae87d1fa298.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://assets-cdn.github.com/assets/github2-dd8bb8369b8ec079cf21bf99e6775fecfc857255.css" media="all" rel="stylesheet" type="text/css" />
    


    <meta http-equiv="x-pjax-version" content="0acd801768b2aac0a1e9f7e4009c41f8">

      
  <meta name="description" content="PHPMailer - The classic email sending library for PHP - this is my personal fork, please post issues on the upstream project" />

  <meta content="81561" name="octolytics-dimension-user_id" /><meta content="Synchro" name="octolytics-dimension-user_login" /><meta content="9370939" name="octolytics-dimension-repository_id" /><meta content="Synchro/PHPMailer" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="true" name="octolytics-dimension-repository_is_fork" /><meta content="2253830" name="octolytics-dimension-repository_parent_id" /><meta content="PHPMailer/PHPMailer" name="octolytics-dimension-repository_parent_nwo" /><meta content="2253830" name="octolytics-dimension-repository_network_root_id" /><meta content="PHPMailer/PHPMailer" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/Synchro/PHPMailer/commits/master.atom" rel="alternate" title="Recent Commits to PHPMailer:master" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production windows vis-public fork page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/join">Sign up</a>
      <a class="button signin" href="/login?return_to=%2FSynchro%2FPHPMailer%2Fblob%2Fmaster%2FPHPMailerAutoload.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<div class="commandbar">
  <span class="message"></span>
  <input type="text" data-hotkey="s, /" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="Synchro/PHPMailer"
      data-branch="master"
      data-sha="e5d5ca084053e8d4d64ada4d84a9bfeb784bc131"
  >
  <div class="display hidden"></div>
</div>

    <input type="hidden" name="nwo" value="Synchro/PHPMailer" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
    <a href="/login?return_to=%2FSynchro%2FPHPMailer"
    class="minibutton with-count star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>Star
  </a>

    <a class="social-count js-social-count" href="/Synchro/PHPMailer/stargazers">
      790
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2FSynchro%2FPHPMailer"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked"></span>Fork
      </a>
      <a href="/Synchro/PHPMailer/network" class="social-count">
        1,423
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/Synchro" class="url fn" itemprop="url" rel="author"><span itemprop="title">Synchro</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/Synchro/PHPMailer" class="js-current-repository js-repo-home-link">PHPMailer</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

            <span class="fork-flag">
              <span class="text">forked from <a href="/PHPMailer/PHPMailer">PHPMailer/PHPMailer</a></span>
            </span>
        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/Synchro/PHPMailer" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /Synchro/PHPMailer">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/Synchro/PHPMailer/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g p" data-selected-links="repo_pulls /Synchro/PHPMailer/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>0</span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/Synchro/PHPMailer/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /Synchro/PHPMailer/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/Synchro/PHPMailer/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /Synchro/PHPMailer/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/Synchro/PHPMailer/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /Synchro/PHPMailer/network">
          <span class="octicon octicon-repo-forked"></span> <span class="full-word">Network</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/Synchro/PHPMailer.git" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/Synchro/PHPMailer.git" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/Synchro/PHPMailer" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/Synchro/PHPMailer" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>


  <a href="http://windows.github.com" class="minibutton sidebar-button" title="Save Synchro/PHPMailer to your computer and use it in GitHub Desktop." aria-label="Save Synchro/PHPMailer to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/Synchro/PHPMailer/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download Synchro/PHPMailer as a zip file"
                   title="Download Synchro/PHPMailer as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<a href="/Synchro/PHPMailer/blob/ab923badb884b554cffc8458ae6464ff89f581c8/PHPMailerAutoload.php" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:506c129a84a91cc8b7242da6c728da1e -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/Synchro/PHPMailer/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/blob/5.0-dev/PHPMailerAutoload.php"
                 data-name="5.0-dev"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="5.0-dev">5.0-dev</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/blob/5.0-phpdocs/PHPMailerAutoload.php"
                 data-name="5.0-phpdocs"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="5.0-phpdocs">5.0-phpdocs</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/blob/master/PHPMailerAutoload.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/blob/phpmailer-2.0/PHPMailerAutoload.php"
                 data-name="phpmailer-2.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-2.0">phpmailer-2.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/blob/phpmailer-2.3.0-msg-limit-patch/PHPMailerAutoload.php"
                 data-name="phpmailer-2.3.0-msg-limit-patch"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-2.3.0-msg-limit-patch">phpmailer-2.3.0-msg-limit-patch</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/blob/phpmailer-5.2.0/PHPMailerAutoload.php"
                 data-name="phpmailer-5.2.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-5.2.0">phpmailer-5.2.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/blob/qmail/PHPMailerAutoload.php"
                 data-name="qmail"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="qmail">qmail</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/blob/smtp-refactor/PHPMailerAutoload.php"
                 data-name="smtp-refactor"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="smtp-refactor">smtp-refactor</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/blob/vendor/PHPMailerAutoload.php"
                 data-name="vendor"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="vendor">vendor</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.2.7/PHPMailerAutoload.php"
                 data-name="v5.2.7"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v5.2.7">v5.2.7</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.2.6/PHPMailerAutoload.php"
                 data-name="v5.2.6"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v5.2.6">v5.2.6</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.2.5/PHPMailerAutoload.php"
                 data-name="v5.2.5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v5.2.5">v5.2.5</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.1.0/PHPMailerAutoload.php"
                 data-name="v5.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v5.1.0">v5.1.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.0.2/PHPMailerAutoload.php"
                 data-name="v5.0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v5.0.2">v5.0.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.0.0/PHPMailerAutoload.php"
                 data-name="v5.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v5.0.0">v5.0.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v2.3.0/PHPMailerAutoload.php"
                 data-name="v2.3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.3.0">v2.3.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v2.0.3/PHPMailerAutoload.php"
                 data-name="v2.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.0.3">v2.0.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-5.1/PHPMailerAutoload.php"
                 data-name="phpmailer-5.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-5.1">phpmailer-5.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-5.0.2/PHPMailerAutoload.php"
                 data-name="phpmailer-5.0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-5.0.2">phpmailer-5.0.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-5.0.0/PHPMailerAutoload.php"
                 data-name="phpmailer-5.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-5.0.0">phpmailer-5.0.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-2.3.0%40186/PHPMailerAutoload.php"
                 data-name="phpmailer-2.3.0@186"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-2.3.0@186">phpmailer-2.3.0@186</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-2.3.0/PHPMailerAutoload.php"
                 data-name="phpmailer-2.3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-2.3.0">phpmailer-2.3.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-2.0.3/PHPMailerAutoload.php"
                 data-name="phpmailer-2.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-2.0.3">phpmailer-2.0.3</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Synchro/PHPMailer" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">PHPMailer</span></a></span></span><span class="separator"> / </span><strong class="final-path">PHPMailerAutoload.php</strong> <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="PHPMailerAutoload.php" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
  </div>
</div>


  <div class="commit file-history-tease">
      <img alt="Marcus Bointon" class="main-avatar js-avatar" data-user="81561" height="24" src="https://avatars2.githubusercontent.com/u/81561?s=140" width="24" />
      <span class="author"><a href="/Synchro" rel="author">Synchro</a></span>
      <time datetime="2014-04-08T13:45:36+02:00" is="relative-time">April 08, 2014</time>
      <div class="commit-title">
          <a href="/Synchro/PHPMailer/commit/9103c12ef029550961e1b69e2a5053b95a2a8246" class="message" data-pjax="true" title="Docs cleanup, some markdown, make file comments consistent
Add HTML5 email address validation pattern
Fix language path if CWD has changed (fixes #205)">Docs cleanup, some markdown, make file comments consistent</a>
      </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>2</strong>  contributors</a></p>
          <a class="avatar tooltipped tooltipped-s" aria-label="Synchro" href="/Synchro/PHPMailer/commits/master/PHPMailerAutoload.php?author=Synchro"><img alt="Marcus Bointon" class=" js-avatar" data-user="81561" height="20" src="https://avatars2.githubusercontent.com/u/81561?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="glensc" href="/Synchro/PHPMailer/commits/master/PHPMailerAutoload.php?author=glensc"><img alt="Elan Ruusamäe" class=" js-avatar" data-user="199095" height="20" src="https://avatars2.githubusercontent.com/u/199095?s=140" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Marcus Bointon" class=" js-avatar" data-user="81561" height="24" src="https://avatars2.githubusercontent.com/u/81561?s=140" width="24" />
            <a href="/Synchro">Synchro</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Elan Ruusamäe" class=" js-avatar" data-user="199095" height="24" src="https://avatars2.githubusercontent.com/u/199095?s=140" width="24" />
            <a href="/glensc">glensc</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>50 lines (47 sloc)</span>
          <span class="meta-divider"></span>
        <span>1.689 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped tooltipped-w"
               href="http://windows.github.com" aria-label="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
              <a class="minibutton disabled tooltipped tooltipped-w" href="#"
                 aria-label="You must be signed in to make or propose changes">Edit</a>
          <a href="/Synchro/PHPMailer/raw/master/PHPMailerAutoload.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/Synchro/PHPMailer/blame/master/PHPMailerAutoload.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/Synchro/PHPMailer/commits/master/PHPMailerAutoload.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger disabled empty-icon tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          Delete
        </a>
      </div><!-- /.actions -->
    </div>
      
  <div class="blob-wrapper data type-php js-blob-data">
       <table class="file-code file-diff tab-size-8">
         <tr class="file-code-line">
           <td class="blob-line-nums">
             <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>

           </td>
           <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> * PHPMailer SPL autoloader.</span></div><div class='line' id='LC4'><span class="sd"> * PHP Version 5</span></div><div class='line' id='LC5'><span class="sd"> * @package PHPMailer</span></div><div class='line' id='LC6'><span class="sd"> * @link https://github.com/PHPMailer/PHPMailer/ The PHPMailer GitHub project</span></div><div class='line' id='LC7'><span class="sd"> * @author Marcus Bointon (Synchro/coolbru) &lt;phpmailer@synchromedia.co.uk&gt;</span></div><div class='line' id='LC8'><span class="sd"> * @author Jim Jagielski (jimjag) &lt;jimjag@gmail.com&gt;</span></div><div class='line' id='LC9'><span class="sd"> * @author Andy Prevost (codeworxtech) &lt;codeworxtech@users.sourceforge.net&gt;</span></div><div class='line' id='LC10'><span class="sd"> * @author Brent R. Matzelle (original founder)</span></div><div class='line' id='LC11'><span class="sd"> * @copyright 2012 - 2014 Marcus Bointon</span></div><div class='line' id='LC12'><span class="sd"> * @copyright 2010 - 2012 Jim Jagielski</span></div><div class='line' id='LC13'><span class="sd"> * @copyright 2004 - 2009 Andy Prevost</span></div><div class='line' id='LC14'><span class="sd"> * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License</span></div><div class='line' id='LC15'><span class="sd"> * @note This program is distributed in the hope that it will be useful - WITHOUT</span></div><div class='line' id='LC16'><span class="sd"> * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or</span></div><div class='line' id='LC17'><span class="sd"> * FITNESS FOR A PARTICULAR PURPOSE.</span></div><div class='line' id='LC18'><span class="sd"> */</span></div><div class='line' id='LC19'><br/></div><div class='line' id='LC20'><span class="sd">/**</span></div><div class='line' id='LC21'><span class="sd"> * PHPMailer SPL autoloader.</span></div><div class='line' id='LC22'><span class="sd"> * @param string $classname The name of the class to load</span></div><div class='line' id='LC23'><span class="sd"> */</span></div><div class='line' id='LC24'><span class="k">function</span> <span class="nf">PHPMailerAutoload</span><span class="p">(</span><span class="nv">$classname</span><span class="p">)</span></div><div class='line' id='LC25'><span class="p">{</span></div><div class='line' id='LC26'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Can&#39;t use __DIR__ as it&#39;s only in PHP 5.3+</span></div><div class='line' id='LC27'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$filename</span> <span class="o">=</span> <span class="nb">dirname</span><span class="p">(</span><span class="k">__FILE__</span><span class="p">)</span><span class="o">.</span><span class="nx">DIRECTORY_SEPARATOR</span><span class="o">.</span><span class="s1">&#39;class.&#39;</span><span class="o">.</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$classname</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;.php&#39;</span><span class="p">;</span></div><div class='line' id='LC28'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">is_readable</span><span class="p">(</span><span class="nv">$filename</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC29'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">require</span> <span class="nv">$filename</span><span class="p">;</span></div><div class='line' id='LC30'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC31'><span class="p">}</span></div><div class='line' id='LC32'><br/></div><div class='line' id='LC33'><span class="k">if</span> <span class="p">(</span><span class="nb">version_compare</span><span class="p">(</span><span class="k">PHP_VERSION</span><span class="p">,</span> <span class="s1">&#39;5.1.2&#39;</span><span class="p">,</span> <span class="s1">&#39;&gt;=&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC34'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//SPL autoloading was introduced in PHP 5.1.2</span></div><div class='line' id='LC35'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">version_compare</span><span class="p">(</span><span class="k">PHP_VERSION</span><span class="p">,</span> <span class="s1">&#39;5.3.0&#39;</span><span class="p">,</span> <span class="s1">&#39;&gt;=&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC36'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">spl_autoload_register</span><span class="p">(</span><span class="s1">&#39;PHPMailerAutoload&#39;</span><span class="p">,</span> <span class="k">true</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC37'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC38'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">spl_autoload_register</span><span class="p">(</span><span class="s1">&#39;PHPMailerAutoload&#39;</span><span class="p">);</span></div><div class='line' id='LC39'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC40'><span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC41'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC42'><span class="sd">     * Fall back to traditional autoload for old PHP versions</span></div><div class='line' id='LC43'><span class="sd">     * @param string $classname The name of the class to load</span></div><div class='line' id='LC44'><span class="sd">     */</span></div><div class='line' id='LC45'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">function</span> <span class="nf">__autoload</span><span class="p">(</span><span class="nv">$classname</span><span class="p">)</span></div><div class='line' id='LC46'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC47'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">PHPMailerAutoload</span><span class="p">(</span><span class="nv">$classname</span><span class="p">);</span></div><div class='line' id='LC48'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC49'><span class="p">}</span></div></pre></div></td>
         </tr>
       </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.02767s from github-fe117-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-be770ee7a7d6343e9465cf4453dfbc663236106a.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-3b464097d64b2866858239cce5318d07c67fda88.js" type="text/javascript"></script>
      
      
        <script async src="https://www.google-analytics.com/analytics.js"></script>
  </body>
</html>

