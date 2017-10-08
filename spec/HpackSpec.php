<?php

namespace spec\Wimby\Hpack;

use Wimby\Hpack\Hpack;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HpackSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Hpack::class);
    }

    function it_should_answer_question() {
        $this->test()->shouldReturn(42);
    }
}
