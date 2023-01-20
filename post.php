<?php
include_once('./template/header.php');

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($postId == $post['id']) {
            $currentPost = $post;
        }
    }
}
?>

<?php ?>


<main id="post-container">
    
    <div class="content-container">
        <h1 id="main-title">
            <?= $currentPost['title'] ?>
        </h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ultricies odio nec
            neque luctus, a euismod lectus hendrerit. Aliquam vitae malesuada libero. Nunc maximus pretium facilisis.
            Sed ligula ante, accumsan sit amet est non, ullamcorper porttitor augue. Vivamus hendrerit velit sed
            interdum finibus. Aenean quis vulputate nunc. Aenean posuere orci quis tellus hendrerit, eget blandit arcu
            vulputate. Fusce et sem nec metus pretium accumsan. Morbi in lorem egestas, blandit eros nec, volutpat
            justo. Nam ut mollis arcu, nec vestibulum elit. Nam ultricies sapien vel dui bibendum, at ullamcorper nisi
            bibendum. Suspendisse a felis nec dui congue varius. Ut nisl massa, elementum id pharetra vitae, rutrum ut
            sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque sed
            gravida orci. Etiam dapibus fermentum mi, sed pharetra enim.

            Quisque condimentum velit sit amet nisl vestibulum, ac blandit urna pellentesque. Morbi tristique
            pellentesque vestibulum. Proin interdum id elit ut eleifend. Suspendisse non purus id mi commodo molestie.
            Nulla in ante ac elit pretium consequat maximus sollicitudin lectus. Morbi malesuada metus eget porta
            congue. Nam varius, nisl ut viverra pretium, elit dui pellentesque tortor, venenatis consectetur sem tortor
            quis sapien. Integer vitae ipsum in velit pellentesque hendrerit. Donec pretium fermentum ligula, vel
            consequat sem finibus eget. Morbi non tristique sapien. Vestibulum imperdiet est id leo dictum, et sodales
            dolor porttitor. Duis id neque vel mi ultrices dictum. Morbi eros ipsum, finibus in tellus ut, vestibulum
            viverra turpis. Nam pharetra euismod orci non porta. Pellentesque scelerisque id tellus a tincidunt.

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut dolor mauris. Ut auctor, arcu quis
            eleifend gravida, massa erat pretium urna, in tincidunt arcu metus in dui. Duis et erat quis turpis suscipit
            venenatis. Morbi id fermentum mi, quis lacinia eros. In dignissim elementum ipsum et sagittis. Morbi augue
            libero, tincidunt ut vehicula a, dictum at nunc. Pellentesque vel cursus eros, vitae tempus diam. Integer ac
            metus vitae nisi ullamcorper tincidunt sit amet eu lorem. Vivamus in mauris vel nibh venenatis porttitor.
            Vivamus nec egestas purus, eu dapibus ex. Phasellus fringilla lobortis turpis id suscipit. Nunc nec dapibus
            mauris. Vestibulum in consectetur elit. Aenean posuere lacinia nunc, nec iaculis nulla varius congue.
            Suspendisse dignissim augue mi, sit amet elementum magna laoreet id.

            Fusce tincidunt dui vel nisl ultrices pulvinar. Class aptent taciti sociosqu ad litora torquent per conubia
            nostra, per inceptos himenaeos. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed id commodo
            nisi, sed dignissim turpis. In molestie nibh sed erat volutpat gravida. In non nibh quis mi egestas
            placerat. Mauris tristique accumsan metus in finibus. Pellentesque semper accumsan mollis. Curabitur eu erat
            odio. Phasellus vitae ultrices lacus, eu pulvinar libero.

            Nam ac tincidunt augue. Mauris facilisis rhoncus laoreet. In hac habitasse platea dictumst. Cras ullamcorper
            tellus et dolor semper, quis congue dui tempor. In commodo fermentum lorem eget pretium. Sed nec felis
            felis. In fermentum tincidunt sapien vel consequat. Maecenas in ornare quam, non egestas massa.</p>
    </div>
    <aside id='nav-container'>
        <h3 id="tags-title">Tags</h3>
        <ul id='tag-list'>
            <?php foreach($currentPost['tags'] as $tag) { ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php } ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category ) { ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php } ?>
        </ul>
    </aside>
</main>

<?php
include_once('./template/footer.php');
?>