import React from 'react';
import PropTypes from 'prop-types';

export default function Quote({ avatarAlt, avatarUrl, company, linkUrl, name, quote }) {
  return (
    <blockquote className="relative p-4 text-xl italic border-l-4 bg-neutral-100 text-neutral-600 border-neutral-500 quote">
      <div className="stylistic-quote-mark" aria-hidden="true">
        &ldquo;
      </div>
      <p className="mb-4">{quote}</p>
      <cite className="flex items-center">
        <img alt={avatarAlt} className="w-12 mr-4 rounded-full bg-neutral-500" src={avatarUrl} />
        <div className="flex flex-col items-start">
          <span className="mb-1 text-sm italic font-bold">{name}</span>
          <a href={linkUrl} target="_blank" rel="noopener noreferrer" className="text-sm">
            {company}
          </a>
        </div>
      </cite>
    </blockquote>
  );
}

Quote.propTypes = {
  avatarAlt: PropTypes.string,
  avatarUrl: PropTypes.string,
  company: PropTypes.string,
  linkUrl: PropTypes.string,
  name: PropTypes.string,
  quote: PropTypes.string,
};
