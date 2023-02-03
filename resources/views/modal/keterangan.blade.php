<div class="modal fade" id="deksripsiModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deksripsiModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Keterangan</h4>
      </div>
      <div class="modal-body">
        <P>{{ $item->respon_desk }}</P>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>