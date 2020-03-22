import React, { createRef } from 'react';
import MailchimpSubscribe from 'react-mailchimp-subscribe';

const url =
  'https://nunomaduro.us12.list-manage.com/subscribe/post?u=d5f11957aceb28cf3e4c30788&amp;id=0d8aed1043';

export default function Newsletter() {
  const emailRef = createRef(undefined);

  return (
    <div>
      <MailchimpSubscribe
        url={url}
        render={({ subscribe, status, message }) => {
          switch (status) {
            case 'sending':
              return <em>Sending request...</em>;
            case 'success':
              return <em>Thanks! We will get in touch soon...</em>;
            case 'error':
              const replaceEnd = answer => {
                const end = 'to list nunomaduro.com.';
                const index = answer.indexOf(end);
                return answer.substring(0, index != -1 ? index : answer.length);
              };

              return <em dangerouslySetInnerHTML={{ __html: replaceEnd(message) }} />;
            default:
              return (
                <form
                  onSubmit={() => {
                    event.preventDefault();

                    if (emailRef.current.value === '') {
                      return;
                    }

                    subscribe({ EMAIL: emailRef.current.value });
                  }}
                >
                  <div className="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                    <input
                      type="email"
                      placeholder="Your Email"
                      ref={emailRef}
                      className="flex-1 mt-4 appearance-none border border-gray-400 rounded shadow-md p-3 text-gray-600 mr-2 focus:outline-none"
                    />
                    <button
                      type="submit"
                      className="flex-1 mt-4 block md:inline-block appearance-none bg-teal-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-teal-400"
                    >
                      Subscribe
                    </button>
                  </div>
                </form>
              );
          }
        }}
      />
    </div>
  );
}

export { Newsletter };
