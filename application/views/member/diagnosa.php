<style>
  .symptom-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 16px;
    margin-bottom: 35px;
  }
  .symptom-card {
    background: #fff;
    border-radius: 12px;
    padding: 16px 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    display: flex;
    align-items: center;
    user-select: none;
    margin: 0;
    font-weight: normal;
    text-align: left;
    position: relative;
    overflow: hidden;
  }
  .symptom-card:hover {
    border-color: #2563eb;
    background-color: #f8fafc;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
  }
  .symptom-checkbox {
    width: 20px;
    height: 20px;
    margin-right: 14px;
    accent-color: #2563eb;
    cursor: pointer;
    flex-shrink: 0;
    border-radius: 4px;
    border: 2px solid #cbd5e1;
    transition: all 0.2s;
  }
  .symptom-card.selected-card {
    border-color: #2563eb;
    background: linear-gradient(145deg, #ffffff 0%, #f0f7ff 100%);
    box-shadow: 0 8px 25px rgba(37, 99, 235, 0.12);
  }
  .symptom-card.selected-card .symptom-text {
    color: #1e40af;
    font-weight: 600;
  }
  .symptom-card.selected-card .symptom-code {
    background: #2563eb;
    color: #fff;
    transform: scale(1.05);
  }
  .symptom-code {
    background: #f1f5f9;
    color: #475569;
    padding: 3px 8px;
    border-radius: 6px;
    font-size: 12px;
    font-weight: 800;
    margin-right: 12px;
    flex-shrink: 0;
    transition: all 0.25s ease;
    border: 1px solid #e2e8f0;
  }
  .symptom-text {
    font-size: 14px;
    color: #334155;
    margin: 0;
    line-height: 1.5;
  }
  .diagnose-container {
    background: #fff;
    border-radius: 24px;
    padding: 45px;
    box-shadow: 0 12px 50px rgba(0, 0, 0, 0.04);
    border: 1px solid #e2e8f0;
  }
  .diagnose-submit-btn {
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: #fff !important;
    border: none;
    padding: 14px 45px;
    font-size: 16px;
    font-weight: 700;
    border-radius: 50px;
    box-shadow: 0 8px 25px rgba(37, 99, 235, 0.3);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    margin-top: 20px;
    cursor: pointer;
    display: inline-block;
    letter-spacing: 0.5px;
  }
  .diagnose-submit-btn:hover {
    background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
    box-shadow: 0 12px 30px rgba(37, 99, 235, 0.45);
    transform: translateY(-2px);
  }
</style>

<div class="section section-features" style="background-color: #f8fafc; padding: 120px 0 80px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="diagnose-container">
          <h2 class="text-center" style="font-weight: 700; color: #1e293b; margin: 0 0 10px 0;">Pilih Gejala Kerusakan</h2>
          <p class="text-center" style="color: #64748b; margin-bottom: 40px; font-size: 16px;">Pilihlah satu atau lebih gejala yang dialami oleh laptop/komputer Anda:</p>
          
          <?php if($this->session->flashdata('pesan')): ?>
            <div style="margin-bottom: 25px;">
              <?= $this->session->flashdata('pesan'); ?>
            </div>
          <?php endif; ?>

          <form action="<?= base_url('diagnosa/hasil'); ?>" method="POST">
            <div class="symptom-grid">
              <?php foreach ($gejala as $g) : ?>
                <label class="symptom-card" id="card_<?= $g['id_gejala']; ?>" for="chk_<?= $g['id_gejala']; ?>">
                  <input type="checkbox" class="symptom-checkbox" id="chk_<?= $g['id_gejala']; ?>" name="id_gejala[]" value="<?= $g['id_gejala']; ?>" onchange="toggleCardStyle(this, 'card_<?= $g['id_gejala']; ?>')">
                  <span class="symptom-code"><?= $g['kode_gejala']; ?></span>
                  <p class="symptom-text">Apakah <?= $g['nama_gejala']; ?>?</p>
                </label>
              <?php endforeach; ?>
            </div>
            
            <div class="text-center">
              <button type="submit" class="diagnose-submit-btn">
                <i class="fa fa-stethoscope"></i> Analisis Kerusakan Sekarang
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function toggleCardStyle(checkbox, cardId) {
    const cardElement = document.getElementById(cardId);
    if (checkbox.checked) {
      cardElement.classList.add('selected-card');
    } else {
      cardElement.classList.remove('selected-card');
    }
  }
</script>