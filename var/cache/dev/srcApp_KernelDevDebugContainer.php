<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXX3bh6S\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXX3bh6S/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXX3bh6S.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXX3bh6S\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXX3bh6S\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'XX3bh6S',
    'container.build_id' => '6a2f751d',
    'container.build_time' => 1550308936,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXX3bh6S');
