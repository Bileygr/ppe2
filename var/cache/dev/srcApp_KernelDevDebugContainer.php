<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container97QTgCD\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container97QTgCD/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container97QTgCD.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container97QTgCD\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container97QTgCD\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => '97QTgCD',
    'container.build_id' => 'f2b3e685',
    'container.build_time' => 1548354051,
), __DIR__.\DIRECTORY_SEPARATOR.'Container97QTgCD');