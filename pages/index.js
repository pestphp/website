import '../css/index.css';
import Quote from '../components/quote';
import Newsletter from '../components/newsletter';

import { DefaultSeo } from 'next-seo';
import Head from 'next/head';

export default function Index() {
  return (
    <div>
      <Head>
        <title>Pest - a delightful PHP Testing Framework</title>
      </Head>
      <DefaultSeo
        openGraph={{
          type: 'website',
          locale: 'en_IE',
          url: 'https://pestphp.com/',
          site_name: 'Pest - a delightful PHP Testing Framework',
          images: [
            {
              url: 'https://pestphp.com/love.jpg',
              alt: 'Pest - a delightful PHP Testing Framework',
            },
          ],
        }}
        twitter={{
          handle: '@pestphp',
          cardType: 'summary_large_image',
        }}
      />

      <div className="container w-full md:max-w-3xl mx-auto">
        <div className="content-center w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
          <img
            className="mx-auto object-center py-12"
            width="80%"
            src="https://raw.githubusercontent.com/nunomaduro/pest/master/art/logo.gif"
          />
          <p className="py-6">
            Did you ever wonder why you need a <code>namespace</code>, a <code>class</code> that{' '}
            <code>extends</code> something and a <code>method</code> to see your test?
            <strong>
              {' '}
              Testing can be more intuitive, user-friendly and productive than you think!
            </strong>
          </p>

          <p className="text-6xl py-6">Introducing Pest</p>

          <p className="py-6">
            Pest is a delightful <strong>PHP Testing Framework</strong> with a focus on simplicity,
            and it was carefully crafted to bring the joy of testing to PHP.
          </p>

          <p className="py-6">
            <em>Ready? Let's see some code: </em>
          </p>

          <video width="100%" height="240" autoPlay loop playsInline>
            <source src="pest.mp4" type="video/mp4"></source>
          </video>

          <div className="py-6">
            <div className="font-sans bg-white rounded-lg shadow-md p-4 text-center">
              <h2 className="font-bold break-normal text-xl md:text-3xl">Awesome right?</h2>
              <h3 className="font-bold break-normal font-normal text-gray-600 text-sm md:text-base">
                Join the waiting list!
              </h3>
              <div className="w-full text-center pt-4 mb-6">
                <Newsletter />
              </div>
            </div>
          </div>

          <p className="text-2xl py-6">It fells like home!</p>

          <p>
            Pest is powered by PHPUnit, so it couldn't be easier to get started. Just drop your
            current PHPUnit test within Pest and it will just work. You won't have to change a
            thing.
          </p>

          <img className="py-6" src="assertions.png" alt="Assertions example" />

          <blockquote className="border-l-4 border-teal-500 italic my-8 pl-8 md:pl-12"></blockquote>

          <p className="text-2xl py-6">Command-line interfaces that people love!</p>

          <p>
            Pest gives you the most beautiful test reporting in the world, straight from the
            console! Brought to you by the creators of Laravel Zero, Collision, Larastan & Php
            Insights.
          </p>

          <img className="py-6" src="love.jpg" alt="Interface" />

          <Quote
            avatarAlt={`Avatar of Michael Dyrynda`}
            avatarUrl="dyrynda.jpg"
            company="Co-host of Laravel News Podcast"
            linkUrl="https://twitter.com/michaeldyrynda"
            name="Michael Dyrynda"
            quote="Looks gorgeous. You need to give some kind of shift from PHPUnit to Pest! 🔥"
          />

          <div className="py-6">
            <div className="font-sans bg-white rounded-lg shadow-md p-4 text-center">
              <h2 className="font-bold break-normal text-xl md:text-3xl">Awesome right?</h2>
              <h3 className="font-bold break-normal font-normal text-gray-600 text-sm md:text-base">
                Join the waiting list!
              </h3>
              <div className="w-full text-center pt-4 mb-6">
                <Newsletter />
              </div>
            </div>
          </div>

          <div className="flex w-full items-center font-sans py-12">
            <img className="w-10 h-10 rounded-full mr-4" src="nunomaduro.jpg" alt="Nuno Maduro" />
            <div className="flex-1 px-2">
              <p className="text-base font-bold text-base md:text-xl leading-none mb-2">
                Nuno Maduro
              </p>
              <p className="text-gray-600 text-xs md:text-base">
                Software engineer at Algolia. Created Laravel Zero, Collision, Larastan, PHP
                Insights, and more.
              </p>
            </div>
            <div className="justify-end">
              <a href="https://twitter.com/enunomaduro" target="_blank">
                <button className="bg-transparent border border-gray-500 hover:border-teal-500 text-xs text-gray-500 hover:text-teal-500 font-bold py-2 px-4 rounded-full">
                  Follow me
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <footer className="bg-white border-t border-gray-400 shadow">
        <div className="container max-w-4xl mx-auto flex py-8">
          <div className="w-full mx-auto flex flex-wrap">
            <div className="flex w-full md:w-1/2">
              <div className="px-8">
                <h3 className="font-bold text-gray-900">Social</h3>
                <ul className="list-reset items-center text-sm pt-3">
                  <li>
                    <a
                      target="_blank"
                      className="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1"
                      href="https://github.com/pestphp/pest"
                    >
                      github.com/pestphp/pest
                    </a>
                  </li>
                  <li>
                    <a
                      target="_blank"
                      className="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1"
                      href="https://twitter.com/pestphp"
                    >
                      twitter.com/pestphp
                    </a>
                  </li>
                  <li>
                    <a
                      target="_blank"
                      className="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1"
                      href="https://nunomaduro.com/"
                    >
                      nunomaduro.com
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  );
}
