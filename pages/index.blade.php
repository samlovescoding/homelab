<?php

use Livewire\Component;

new class extends Component
{
  //
};
?>

<div>
  <title>Welcome</title>
  <h1 class="text-4xl">Homelab Server</h1>

  <flux:spacer class="h-12" />

  <flux:text>
    <strong>Processor</strong>: Intel Core i5 8400 <br/>
    Cores: 6
    Threads: 6
  </flux:text>

  <flux:spacer class="h-12" />

  <flux:text>
    <strong>Memory</strong>: 16GB <br/>
    DDR5_1: 8GB <br/>
    DDR5_2: 8GB <br/>
    DDR5_3:  <br/>
    DDR5_4:  <br/>
  </flux:text>

  <flux:spacer class="h-12" />

  <flux:text>
    <strong>Graphics</strong>: Nvidia GTX 1050 Ti <br/>
    VRAM: 4GB <br/>
    Drivers: nvidia <br/>
  </flux:text>

  <flux:spacer class="h-12" />

  <flux:text>
    <strong>Storage</strong>: 512GB (Gen 4 - 6GB/s) <br/> <br />
    <ol class="list-decimal text-[12px] -mt-4 text-white/70 ml-4">
      <li>Operating System</li>
      <li>Applications</li>
      <li>Databases</li>
      <li>Caches</li>
      <li>Application Storages</li>
    </ol>
  </flux:text>

  <flux:spacer class="h-12" />

  <flux:text>
    <strong>Storage</strong>: 128TB (MergerFS Pool) <br/> <br />
    <ol class="list-decimal text-[12px] -mt-4 text-white/70 ml-4">
      <li>Large File Storage</li>
      <li>Movies</li>
      <li>TV Shows</li>
      <li>Music</li>
      <li>Comic Books</li>
      <li>Manga</li>
      <li>Cartoons</li>
      <li>Anime</li>
      <li>Courses</li>
      <li>Softwares</li>
    </ol>
  </flux:text>
</div>
