<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKVGKzV4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKVGKzV4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKVGKzV4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKVGKzV4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKVGKzV4\App_KernelDevDebugContainer([
    'container.build_hash' => 'KVGKzV4',
    'container.build_id' => 'c9075240',
    'container.build_time' => 1589121028,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKVGKzV4');
