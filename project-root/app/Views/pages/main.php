<!-- Extending the base layout -->
<?=$this->extend('pages/layout') ?>

<!-- Including view partials to display the desired content -->
<?=$this->section('content') ?>

  <!-- Header -->
      <div class="my-5">
      <h1 class="">Simple Calculation Verifier</h1>
      </div>
 <!-- End of  Header -->

 <!-- Input Form -->
    <div>
    <form action="/result" method="post">
  <div class="mb-3">
    <label for="firstNumber" class="form-label">Enter First Number</label>
    <input type="number" class="form-control" name="firstNumber" id="firstNumber"  required>
  </div>
  <div class="mb-3">
    <label for="secondNumber" class="form-label">Enter Second Number</label>
    <input type="number" class="form-control" name="secondNumber" id="secondNumber"  required>
  </div>
  <div class="mb-3">
  <select required class="form-select" name="operator">
  <option value="">Select a operand</option>
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
  </select>
  </div>

  <div class="mb-3">
    <label for="answer" class="form-label">Enter the answer</label>
    <input type="number" class="form-control" name="answer" id="answer"  required>
  </div>

  <button type="submit" class="btn btn-primary">Verify Answer</button>
</form>
    </div>

    <!-- End of  Input Form -->

<?=$this->endSection() ?>

<!-- Closing view partials -->
