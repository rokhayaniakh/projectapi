<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXmpndgW\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXmpndgW/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXmpndgW.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXmpndgW\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXmpndgW\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XmpndgW',
    'container.build_id' => 'e0863a63',
    'container.build_time' => 1564580118,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXmpndgW');
