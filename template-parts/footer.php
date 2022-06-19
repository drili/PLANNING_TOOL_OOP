
            <!-- *** JavaScript -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script src="<?php echo $currentDirectory; ?>/assets/js/global.js"></script>
            <script src="<?php echo $currentDirectory; ?>/assets/js/animations.js"></script>
        </div> <!-- .body-class -->
        <a href="#" class="create-task" data-tooltip="Add task">+</a>
        <script>
// Initialize deferredPrompt for use later to show browser install prompt.
let deferredPrompt;

window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent the mini-infobar from appearing on mobile
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI notify the user they can install the PWA
  showInstallPromotion();
  // Optionally, send analytics event that PWA install promo was shown.
  console.log(`'beforeinstallprompt' event was fired.`);
});

        
    </script>
    </body>
</html>