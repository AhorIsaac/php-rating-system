      var firefoxTestDone = false
      function reportFirefoxTestResult(result) {
        if (!firefoxTestDone) {
          $('#ff-bug-test-result')
            .addClass(result ? 'text-success' : 'text-danger')
            .text(result ? 'PASS' : 'FAIL')
        }
      }

      $(function () {
        $('[data-toggle="popover"]').popover()
        $('[data-toggle="tooltip"]').tooltip()

        $('#tall-toggle').click(function () {
          $('#tall').toggle()
        })

        $('#ff-bug-input').one('focus', function () {
          $('#firefoxModal').on('focus', reportFirefoxTestResult.bind(false))
          $('#ff-bug-input').on('focus', reportFirefoxTestResult.bind(true))
        })

        $('#btnPreventModal').on('click', function () {
          $('#firefoxModal').one('shown.bs.modal', function () {
            $(this).modal('hide')
          })
          .one('hide.bs.modal', function (event) {
            event.preventDefault()
            if ($(this).data('bs.modal')._isTransitioning) {
              console.error('Modal plugin should not set _isTransitioning when hide event is prevented')
            } else {
              console.log('Test passed')
              $(this).modal('hide') // work as expected
            }
          })
          .modal('show')
        })
      })