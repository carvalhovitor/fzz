<?php if ($page->id() == 'projects'): ?>

<button title="Home" class="fzz" data-filter="*"><svg baseProfile="basic" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117.2 90.5"><path d="M40.2 38.4c-1-3.6-3.7-.9-5.5-.6-3.5.7-6.9 1.8-10.7 2.9.3-3.9 1.4-10 1.4-10s15.1-4.9 19.5-6.2c4.4-1.3 5.5-4.2 5-7.5-.4-2.6-3.5-1.2-5.4-.7-4.6 1.3-11.7 3.6-17.8 5.4.3-1.3.4-2 .7-2.6.7-1.7 1.1-3.7-.9-4.4-1.7-.6-2.5 1.6-2.9 2.8-.9 2.6-1.5 5.7-1.5 5.7s-5.9 1.7-9 2.8c-3.5 1.2-4.5 5.1-4.5 7.6 0 2.9 9.1-1.1 11.2-1.4-1.1 3.2-1.9 11.3-1.9 11.3s-3 1.2-4.8 1.7c-2.8.8-4.2 4.9-3.4 7.6 1.1 3.4 4.9-1.7 6.9-1 .2.1-1.2 11.4-1.6 16.5-.2 2.2-.8 5 .8 6.3 1.2.9 3.6-2.4 5-4.8C21.9 68 23 50.4 23 50.4s9.8-3.1 13.2-4.2c3.6-1.2 4.9-4.4 4-7.8zM108.1 50.4c-1.7-4.1-4.1.2-5.7 1-7.8 4-15.7 7.9-24.9 10.3 5.7-7.9 11.4-15.8 17.2-23.7 1.5-2.1 2.3-4.4 2.6-6.7.2-1.9-.1-3.9-3.2-2.5-6 2.8-12.4 4.4-18.8 6.1-2.5.6-3.9 2.3-4.9 4.3-.5 1-1.7 2.2-.6 3.6 1 1.3 2.3.8 3.6.3 4.9-1.6 9.9-3.1 16.3-5.1-2.8 3.7-4.8 6.3-6.8 8.9-5.9 7.8-11.3 15.7-14.5 24.9-.4 1.3-1.3 2.6-.1 3.7s2.4 0 3.5-.6c3.2-1.7 6.4-3.2 9.6-4.8 7.9-3.9 15.8-7.9 23.8-11.8 3.5-1.8 3.9-5.5 2.9-7.9z"/><path d="M70.9 53.2c-1-4-3.8-1-5.8-.3-5.4 1.9-10.7 4-17.5 6.5C54 51.1 59.5 44.1 64.7 37c2.3-3.1 5.3-6 6.1-10 .3-1.4 0-2.7-.8-3.8-1.3-1.6-2.4-.1-3.4.4-5.1 2.3-10.2 4.8-15.4 7.1-2.5 1.1-3.8 3.1-4.6 5.4-1 2.8-.1 4.2 2.9 3 3.3-1.2 11.5-5.2 11.8-5-3.4 4.4-8.3 10.1-11.4 14.7-4.3 6.4-9.7 12-12.6 19.3-.4 1.1-1.7 2.2-.4 3.6 1.5 1.4 2.7.4 4.1-.3 3.4-1.6 6.8-3.2 10.3-4.6 5.2-2.1 10.5-4.2 15.8-6 4-1.3 4.5-4.9 3.8-7.6z"/></svg></button>

<?php else: ?>

<a title="Home" class="fzz" href="/">
  <button>
      <svg baseProfile="basic" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117.2 90.5"><path d="M40.2 38.4c-1-3.6-3.7-.9-5.5-.6-3.5.7-6.9 1.8-10.7 2.9.3-3.9 1.4-10 1.4-10s15.1-4.9 19.5-6.2c4.4-1.3 5.5-4.2 5-7.5-.4-2.6-3.5-1.2-5.4-.7-4.6 1.3-11.7 3.6-17.8 5.4.3-1.3.4-2 .7-2.6.7-1.7 1.1-3.7-.9-4.4-1.7-.6-2.5 1.6-2.9 2.8-.9 2.6-1.5 5.7-1.5 5.7s-5.9 1.7-9 2.8c-3.5 1.2-4.5 5.1-4.5 7.6 0 2.9 9.1-1.1 11.2-1.4-1.1 3.2-1.9 11.3-1.9 11.3s-3 1.2-4.8 1.7c-2.8.8-4.2 4.9-3.4 7.6 1.1 3.4 4.9-1.7 6.9-1 .2.1-1.2 11.4-1.6 16.5-.2 2.2-.8 5 .8 6.3 1.2.9 3.6-2.4 5-4.8C21.9 68 23 50.4 23 50.4s9.8-3.1 13.2-4.2c3.6-1.2 4.9-4.4 4-7.8zM108.1 50.4c-1.7-4.1-4.1.2-5.7 1-7.8 4-15.7 7.9-24.9 10.3 5.7-7.9 11.4-15.8 17.2-23.7 1.5-2.1 2.3-4.4 2.6-6.7.2-1.9-.1-3.9-3.2-2.5-6 2.8-12.4 4.4-18.8 6.1-2.5.6-3.9 2.3-4.9 4.3-.5 1-1.7 2.2-.6 3.6 1 1.3 2.3.8 3.6.3 4.9-1.6 9.9-3.1 16.3-5.1-2.8 3.7-4.8 6.3-6.8 8.9-5.9 7.8-11.3 15.7-14.5 24.9-.4 1.3-1.3 2.6-.1 3.7s2.4 0 3.5-.6c3.2-1.7 6.4-3.2 9.6-4.8 7.9-3.9 15.8-7.9 23.8-11.8 3.5-1.8 3.9-5.5 2.9-7.9z"/><path d="M70.9 53.2c-1-4-3.8-1-5.8-.3-5.4 1.9-10.7 4-17.5 6.5C54 51.1 59.5 44.1 64.7 37c2.3-3.1 5.3-6 6.1-10 .3-1.4 0-2.7-.8-3.8-1.3-1.6-2.4-.1-3.4.4-5.1 2.3-10.2 4.8-15.4 7.1-2.5 1.1-3.8 3.1-4.6 5.4-1 2.8-.1 4.2 2.9 3 3.3-1.2 11.5-5.2 11.8-5-3.4 4.4-8.3 10.1-11.4 14.7-4.3 6.4-9.7 12-12.6 19.3-.4 1.1-1.7 2.2-.4 3.6 1.5 1.4 2.7.4 4.1-.3 3.4-1.6 6.8-3.2 10.3-4.6 5.2-2.1 10.5-4.2 15.8-6 4-1.3 4.5-4.9 3.8-7.6z"/></svg>
  </button>
</a>

<?php endif; ?>