<x-admin-layout>
    @section('title', 'Kritik&Saran')
    <div class="page-header">
        <h1 class="page-title">Kritik & Saran</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Kritik & Saran</li>
            </ol>
        </div>
    </div>
    
    <div class="container">
        <ul class="notification">
            <?php
            // Mengurutkan data berdasarkan waktu pembuatan secara menurun
            krsort($saran);
        
            foreach ($saran as $item):
        ?>
        <li>
            <div class="notification-time">
                <span class="date"><?php echo $item->created_at->format('l'); ?></span>
                <span class="time"><?php echo $item->created_at->format('d-m-Y'); ?></span>
            </div>
            <div class="notification-icon">
                <a href="javascript:void(0);"></a>
            </div>
            <div class="notification-body">
                <div class="media mt-0">
                    <div class="media-body ms-3 d-flex">
                        <div class="">
                            <p class="fs-15 text-dark fw-bold mb-0"><?php echo $item->nama; ?></p>
                            <p class="mb-0 fs-13 text-dark"><?php echo $item->saran; ?></p>
                        </div>
                        <div class="notify-time">
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php
            endforeach;
        ?>
                    
        </ul>
    </div>
</x-admin-layout>
