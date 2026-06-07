<style>
  .symptom-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
    margin-bottom: 40px;
  }
  .symptom-card {
    background: #fff;
    border-radius: 16px;
    padding: 24px 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
    transition: all 0.3s ease;
    cursor: pointer;
    display: flex;
    align-items: flex-start;
    user-select: none;
    margin: 0;
    font-weight: normal;
    text-align: left;
    position: relative;
    overflow: hidden;
  }
  .symptom-card:hover {
    border-color: #3b82f6;
    background-color: #f8fafc;
    transform: translateY(-4px);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }
  .symptom-checkbox {
    width: 22px;
    height: 22px;
    margin-right: 20px;
    margin-top: 2px;
    accent-color: #2563eb;
    cursor: pointer;
    flex-shrink: 0;
    border-radius: 6px;
    border: 2px solid #cbd5e1;
    transition: all 0.2s;
  }
  .symptom-card.selected-card {
    border-color: #3b82f6;
    background: #eff6ff;
    box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.2), 0 4px 6px -2px rgba(59, 130, 246, 0.1);
  }
  .symptom-card.selected-card .symptom-text {
    color: #1e3a8a;
    font-weight: 600;
  }
  .symptom-card.selected-card .symptom-code {
    background: #bfdbfe;
    color: #1e3a8a;
  }
  .symptom-code {
    position: absolute;
    top: 12px;
    right: 12px;
    background: #f1f5f9;
    color: #64748b;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    border: 1px solid transparent;
  }
  .symptom-text {
    font-size: 15px;
    color: #334155;
    margin: 0;
    line-height: 1.6;
    padding-right: 25px;
    padding-left: 5px;
    word-break: break-word;
  }
  .diagnose-container {
    background: #fff;
    border-radius: 24px;
    padding: 50px;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    border: 1px solid #f1f5f9;
  }
  .diagnose-submit-btn {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    color: #fff !important;
    border: none;
    padding: 16px 48px;
    font-size: 16px;
    font-weight: 700;
    border-radius: 50px;
    box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    margin-top: 20px;
    cursor: pointer;
    display: inline-block;
    letter-spacing: 0.5px;
  }
  .diagnose-submit-btn:hover {
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    box-shadow: 0 15px 20px -3px rgba(37, 99, 235, 0.4);
    transform: translateY(-3px);
  }
</style>

<div class="section section-features" style="background-color: #f8fafc; padding: 120px 0 80px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="diagnose-container">
          <h2 class="text-center" style="font-weight: 800; color: #0f172a; margin: 0 0 15px 0;">Pilih Gejala Kerusakan</h2>
          <p class="text-center" style="color: #64748b; margin-bottom: 50px; font-size: 16px; max-width: 600px; margin-left: auto; margin-right: auto;">
            Centang gejala-gejala yang sesuai dengan kondisi laptop Anda saat ini untuk mendapatkan hasil analisis yang akurat.
          </p>
          
          <?php if($this->session->flashdata('pesan')): ?>
            <div style="margin-bottom: 30px;">
              <?= $this->session->flashdata('pesan'); ?>
              <?php $this->session->unset_userdata('pesan'); ?>
            </div>
          <?php endif; ?>

          <form action="<?= base_url('diagnosa/hasil'); ?>" method="POST">
            <div class="symptom-grid">
              <?php foreach ($gejala as $g) : ?>
                <label class="symptom-card" id="card_<?= $g['id_gejala']; ?>" for="chk_<?= $g['id_gejala']; ?>">
                  <input type="checkbox" class="symptom-checkbox" id="chk_<?= $g['id_gejala']; ?>" name="id_gejala[]" value="<?= $g['id_gejala']; ?>" onchange="toggleCardStyle(this, 'card_<?= $g['id_gejala']; ?>')">
                  <span class="symptom-code"><?= $g['kode_gejala']; ?></span>
                  <div class="symptom-text">
                    Apakah <?= $g['nama_gejala']; ?>?
                  </div>
                </label>
              <?php endforeach; ?>
            </div>
            
            <div class="text-center">
              <button type="submit" class="diagnose-submit-btn">
                <i class="fa fa-stethoscope" style="margin-right: 8px;"></i> Analisis Kerusakan Sekarang
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