<div class="btn-list d-flex justify-content-center">
    <span class="btn rounded-10 bg-dark-lt" onclick="custome_tab_page('#custome-tab-1')" role="button">{!! App\Models\GlobalModel::my_icon()->layer_grid !!} Tugas Utama</span>
    <span class="btn rounded-10 bg-dark-lt" onclick="custome_tab_page('#custome-tab-2')" role="button">{!! App\Models\GlobalModel::my_icon()->layout_board !!} Tugas Saya</span>
    <span class="btn rounded-10 bg-dark-lt" onclick="custome_tab_page('#custome-tab-3')" role="button">{!! App\Models\GlobalModel::my_icon()->users !!} Member <sup class="ms-1 text-red">{{ $totalMember }}</sup> </span>
    @if(App\Models\GlobalModel::getSession('access'))
    <span class="btn rounded-10 bg-dark-lt" onclick="custome_tab_page('#custome-tab-4')" role="button">{!! App\Models\GlobalModel::my_icon()->setting !!} Pengaturan</span>
    @endif
</div>