<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDozjqqf\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDozjqqf/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerDozjqqf.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerDozjqqf\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerDozjqqf\appProdProjectContainer(array(
    'container.build_hash' => 'Dozjqqf',
    'container.build_id' => '0c642985',
    'container.build_time' => 1559219783,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerDozjqqf');
