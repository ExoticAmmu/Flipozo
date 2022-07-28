<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Admin Dashboard') }}
    </h2>
  </x-slot>

  <main class="pt-20 -mt-2">
    <div class="mx-auto p-2">
      <!-- row -->
      <div class="flex flex-wrap flex-row">
        <div class="flex-shrink max-w-full px-4 w-full">
          <p class="text-xl font-bold mt-3 mb-5">Sweet alert</p>
        </div>
      </div>
      <div class="flex-shrink max-w-full px-4 w-full mb-6">
        <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
          <div class="relative">
            <div class="mb-6">
              <p class="leading-relaxed font-light text-lg mx-auto pb-2">A beautiful, responsive,
                customizable, accessible (wai-aria) replacement for javascript's popup boxes.</p>
            </div>

            <div class="mb-6">
              <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Basic example</h2>
              <div class="pb-4">
                <button class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-green-500 border border-green-500 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0" aria-label="Show SweetAlert2 success message" onclick="SuccessAlert()">Show success
                  message</button>
              </div>
              <pre>
                    <code class="language-html" data-lang="html">
&lt;script src="vendors/sweetalert2/dist/sweetalert2.min.js"&gt;&lt;/script&gt;&lt;!-- sweet alert --&gt;

&lt;script&gt;
Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
);
&lt;/script&gt;
                    </code>
                  </pre>
            </div>

            <div class="mb-6">
              <p class="mb-4">A modal with a title, an error icon, a text, and a footer</p>
              <div class="pb-4">
                <button class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" aria-label="Show SweetAlert2" onclick="ErrorAlert()">Try me!</button>
              </div>
              <pre>
                    <code class="language-html" data-lang="html">
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
  footer: '&lt;a href="#"&gt;Why do I have this issue?&lt;/a&gt;'
})
                    </code>
                  </pre>
            </div>

            <div class="mb-6">
              <p class="mb-4">Custom HTML description and buttons with ARIA labels</p>
              <div class="pb-4">
                <button class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" aria-label="Show SweetAlert2" onclick="HtmlAlert()">Try me!</button>
              </div>
              <pre>
                    <code class="language-html" data-lang="html">
Swal.fire({
  title: '&lt;strong&gt;HTML &lt;u&gt;example&lt;/u&gt;&lt;/strong&gt;',
  icon: 'info',
  html:
    'You can use &lt;b&gt;bold text&lt;/b&gt;, ' +
    '&lt;a href="//sweetalert2.github.io"&gt;links&lt;/a&gt; ' +
    'and other HTML tags',
  showCloseButton: true,
  showCancelButton: true,
  focusConfirm: false,
  confirmButtonText:
    '&lt;i class="fa fa-thumbs-up"&gt;&lt;/i&gt; Great!',
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:
    '&lt;i class="fa fa-thumbs-down"&gt;&lt;/i&gt;',
  cancelButtonAriaLabel: 'Thumbs down'
})
                    </code>
                  </pre>
            </div>

            <div class="mb-6">
              <p class="mb-4">A dialog with three buttons</p>
              <div class="pb-4">
                <button class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" aria-label="Show SweetAlert2" onclick="ThreeAlert()">Try me!</button>
              </div>
              <pre>
                    <code class="language-html" data-lang="html">
Swal.fire({
  title: 'Do you want to save the changes?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Save',
  denyButtonText: `Don't save`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire('Saved!', '', 'success')
  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})
                    </code>
                  </pre>
            </div>

            <div class="mb-6">
              <p class="mb-4">A message with a custom image</p>
              <div class="pb-4">
                <button class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" aria-label="Show SweetAlert2" onclick="ImageAlert()">Try me!</button>
              </div>
              <pre>
                    <code class="language-html" data-lang="html">
Swal.fire({
  title: 'Sweet!',
  text: 'Modal with a custom image.',
  imageUrl: 'https://unsplash.it/400/200',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
})
                    </code>
                  </pre>
            </div>

            <div class="mb-6">
              <p class="mb-4">A message with auto close timer</p>
              <div class="pb-4">
                <button class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" aria-label="Show SweetAlert2" onclick="AutoAlert()">Try me!</button>
              </div>
              <pre>
                    <code class="language-html" data-lang="html">
let timerInterval
Swal.fire({
  title: 'Auto close alert!',
  html: 'I will close in &lt;b&gt;&lt;/b&gt; milliseconds.',
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
                    </code>
                  </pre>
            </div>

            <div class="mb-6">
              <p class="mb-4">Right-to-left support for Arabic, Persian, Hebrew, and other RTL languages
              </p>
              <div class="pb-4">
                <button class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" aria-label="Show SweetAlert2" onclick="RtlAlert()">Try me!</button>
              </div>
              <pre>
                    <code class="language-html" data-lang="html">
Swal.fire({
  title: 'هل تريد الاستمرار؟',
  icon: 'question',
  iconHtml: '؟',
  confirmButtonText: 'نعم',
  cancelButtonText: 'لا',
  showCancelButton: true,
  showCloseButton: true
})
                    </code>
                  </pre>
            </div>

            <div class="mb-6">
              <p class="mb-4">AJAX request example</p>
              <div class="pb-4">
                <button class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" aria-label="Show SweetAlert2" onclick="AjaxAlert()">Try me!</button>
              </div>
              <pre>
                    <code class="language-html" data-lang="html">
Swal.fire({
  title: 'Submit your Github username',
  input: 'text',
  inputAttributes: {
    autocapitalize: 'off'
  },
  showCancelButton: true,
  confirmButtonText: 'Look up',
  showLoaderOnConfirm: true,
  preConfirm: (login) => {
    return fetch(`//api.github.com/users/${login}`)
      .then(response => {
        if (!response.ok) {
          throw new Error(response.statusText)
        }
        return response.json()
      })
      .catch(error => {
        Swal.showValidationMessage(
          `Request failed: ${error}`
        )
      })
  },
  allowOutsideClick: () => !Swal.isLoading()
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: `${result.value.login}'s avatar`,
      imageUrl: result.value.avatar_url
    })
  }
})
                    </code>
                  </pre>
            </div>

            <div class="mb-6">
              <p>You can see complete demo and documentation on here <a target="_blank" class="text-indigo-500" href="https://sweetalert2.github.io/">https://sweetalert2.github.io/</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script>
    function SuccessAlert() {
      Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
      )
    }

    function ErrorAlert() {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href="sweetalert.html">Why do I have this issue?</a>'
      })
    }

    function HtmlAlert() {
      Swal.fire({
        title: '<strong>HTML <u>example</u></strong>',
        icon: 'info',
        html: 'You can use <b>bold text</b>, ' +
          '<a href="https://sweetalert2.github.io/">links</a> ' +
          'and other HTML tags',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText: '<i class="fa fa-thumbs-down"></i> Great!',
        cancelButtonAriaLabel: 'Thumbs down'
      })
    }

    function ThreeAlert() {
      Swal.fire({
        title: 'Do you want to save the changes?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Save',
        denyButtonText: `Don't save`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire('Saved!', '', 'success')
        } else if (result.isDenied) {
          Swal.fire('Changes are not saved', '', 'info')
        }
      })
    }

    function ImageAlert() {
      Swal.fire({
        title: 'Sweet!',
        text: 'Modal with a custom image.',
        imageUrl: 'https://unsplash.it/400/200',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
      })
    }

    function AutoAlert() {
      let timerInterval
      Swal.fire({
        title: 'Auto close alert!',
        html: 'I will close in <b></b> milliseconds.',
        timer: 2000,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
          const b = Swal.getHtmlContainer().querySelector('b')
          timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft()
          }, 100)
        },
        willClose: () => {
          clearInterval(timerInterval)
        }
      }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
          console.log('I was closed by the timer')
        }
      })
    }

    function RtlAlert() {
      Swal.fire({
        title: 'هل تريد الاستمرار؟',
        icon: 'question',
        iconHtml: '؟',
        confirmButtonText: 'نعم',
        cancelButtonText: 'لا',
        showCancelButton: true,
        showCloseButton: true
      })
    }

    function AjaxAlert() {
      Swal.fire({
        title: 'Submit your Github username',
        input: 'text',
        inputAttributes: {
          autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Look up',
        showLoaderOnConfirm: true,
        preConfirm: (login) => {
          return fetch(`//api.github.com/users/${login}`)
            .then(response => {
              if (!response.ok) {
                throw new Error(response.statusText)
              }
              return response.json()
            })
            .catch(error => {
              Swal.showValidationMessage(
                `Request failed: ${error}`
              )
            })
        },
        allowOutsideClick: () => !Swal.isLoading()
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: `${result.value.login}'s avatar`,
            imageUrl: result.value.avatar_url
          })
        }
      })
    }
  </script>

</x-admin-layout>