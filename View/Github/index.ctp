<h1>Github Repos</h1>
<div class="well">
    <p><?php echo $user['info']['bio']; ?></p>
</div>
<div class="row">
<?php
//debug($user);
//debug($repos);
//'homepage' => 'steve.coverdale.me',
//        'size' => (int) 0,
//       'stargazers_count' => (int) 0,
//        'watchers_count' => (int) 0,
//        'language' => 'CSS',
//        'has_issues' => true,
//        'has_downloads' => true,
//        'has_wiki' => true,
//        'forks_count' => (int) 0,
//        'mirror_url' => null,
//        'open_issues_count' => (int) 0,
//        'forks' => (int) 0,
//        'open_issues' => (int) 0,
//        'watchers' => (int) 0,
//        'default_branch' => 'master',
//        'master_branch' => 'master'
//                'html_url' => 'https://github.com/BackEndCoder/ContentManager',
//        'description' => 'A plugin to run side by side with the default CakePHP PagesController for static pages to provide static pages saved and editable in a database',
//        'fork' => false,
//        'id' => (int) 17080956,
//       'name' => 'ContentManager',
//        'full_name' => 'BackEndCoder/ContentManager',


foreach($repos as $repo):
?>
            <article class="github-item col-xs-12 col-sm-4">
                    <footer class="github-meta">
                        <h5>BackEndCoder/<a href="http://github.com/<?php echo $repo['full_name']; ?>"><?php echo $repo['name']; ?></a></h5>
                        <span><?php echo $repo['description']; ?></span>
                    </footer><!-- /.github-meta -->
            </article><!-- /.github-item -->
<?php
endforeach;
?>        
</div>